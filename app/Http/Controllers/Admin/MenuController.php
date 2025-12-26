<?php

namespace App\Http\Controllers\Admin;

use App\Services\BackupService; // <--- DÒNG QUAN TRỌNG NHẤT
use App\Models\Menu;
use App\Models\Category;
use App\Http\Requests\MenuRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;
use App\Http\Controllers\Traits\ImageHandlerTrait;
use App\Http\Controllers\Traits\AdminViewSharedDataTrait;

class MenuController extends Controller
{
    use AdminViewSharedDataTrait;
    use ImageHandlerTrait;

    public function __construct()
    {
        $this->shareAdminViewData();
    }
    
    public function index()
    {
        $categories = Category::with('menus')->get();  
        return view('admin.menus', compact('categories'));
    }

    // --- 1. SỬA HÀM STORE (LƯU MỚI) ---
    public function store(MenuRequest $request)
    {
        $validated = $request->validated();
        
        if ($request->hasFile('image')) {
            $validated['image'] = $this->handleImageUpload($validated['image'], "menus");
        }
    
        // Gán vào biến $menu để gửi đi backup
        $menu = Menu::create($validated);
    
        // [BACKUP] Gửi sang Server C#
        try {
            (new BackupService())->send($menu, 'CANTEEN_MENU');
        } catch (\Exception $e) {
            // Lặng lẽ bỏ qua nếu server backup tắt
        }

        return back()->with('success', 'Menu created successfully!');
    }
    
    // --- 2. SỬA HÀM UPDATE (CẬP NHẬT) ---
    public function update(MenuRequest $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $validated = $request->validated();
    
        if ($request->hasFile('image')) {
            // Delete old image
            $imagePath = storage_path('app/public/' . ltrim($menu->image, '/'));
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    
            // Handle new image upload
            $validated['image'] = $this->handleImageUpload($validated['image'],"menus");
        }
    
        $menu->update($validated);

        // [BACKUP] Gửi bản cập nhật sang Server C#
        try {
            (new BackupService())->send($menu, 'CANTEEN_MENU');
        } catch (\Exception $e) {
            // Lặng lẽ bỏ qua nếu lỗi
        }
    
        return back()->with('success', 'Menu updated successfully!');
    }
    
    // --- 3. SỬA HÀM DESTROY (XÓA) ---
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $imagePath = storage_path('app/public/' . ltrim($menu->image, '/'));

        if (file_exists($imagePath)) {
            unlink($imagePath); // Delete the image file
        }

        $menu->delete();

        // [BACKUP] Gửi lệnh xóa sang Server C#
        try {
            (new BackupService())->delete($id, 'CANTEEN_MENU');
        } catch (\Exception $e) {
            // Lặng lẽ bỏ qua nếu lỗi
        }

        return redirect()->route('admin.menus.index')->with('success', 'Menu deleted successfully!');
    }
}
