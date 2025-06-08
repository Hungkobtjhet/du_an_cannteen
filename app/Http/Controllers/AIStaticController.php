<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AIStaticController extends Controller
{
    public function index()
    {
        return view('ai.static');
    }

    public function chat(Request $request)
    {
        $question = strtolower($request->message);
        $answer = 'Xin lỗi, tôi chưa có thông tin về câu hỏi này.';

        // Câu hỏi và trả lời đơn giản
        $faq = [
            'giờ mở cửa' => 'Chúng tôi mở cửa từ 7h00 đến 21h00 mỗi ngày.',
            'món đặc trưng' => 'Món đặc trưng của chúng tôi là Phở bò và Cơm gà lá chanh.',
            'số điện thoại' => 'Bạn có thể liên hệ số: 0123 456 789.',
            'địa chỉ' => 'Chúng tôi ở 123 Nguyễn Văn Cừ, Q.5, TP.HCM.',
            'cách đặt món' => 'Bạn có thể đặt món trực tiếp trên website hoặc gọi hotline 0123 456 789.'
        ];

        foreach ($faq as $key => $val) {
            if (str_contains($question, $key)) {
                $answer = $val;
                break;
            }
        }

        return response()->json(['reply' => $answer]);
    }
}

