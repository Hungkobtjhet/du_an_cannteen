<?php

namespace App\Http\Controllers\Traits;
use Illuminate\Support\Facades\File;
use Intervention\Image\Laravel\Facades\Image;


trait ImageHandlerTrait
{
 
    private function handleImageUpload($imageFile, $path)
    {
        $image = Image::read($imageFile); 
        $imageName = time() . '-' . $imageFile->getClientOriginalName();
        $storagePath = storage_path("app/public/$path");

        // Save Main Image
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true); // true = tạo recursive
        }
        $image->save($storagePath . '/' . $imageName);

        // Generate cropped image (500x400)
        $image->cover(500, 400);
        $image->save($storagePath . '/' . $imageName);

        return "$path/$imageName";
    }
}


 