<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BackupService
{
    // Link Ngrok Server C# của bạn
    protected $baseUrl = 'https://noumenal-treva-objectionably.ngrok-free.dev/api';
    
    // Key bảo mật (Nếu bạn đã cài ở Gateway, nếu chưa thì để rỗng)
    protected $apiKey = 'Hung_Trum_Backend_2025_Secur3';

    /**
     * Hàm gửi dữ liệu sang Server Backup (Dùng cho cả Tạo mới và Cập nhật)
     */
    public function send($data, $idPrefix = 'PHP')
    {
        try {
            // Lấy ID từ đối tượng data (Laravel Model)
            $rawId = $data->id;
            
            // Tạo ID duy nhất: Ví dụ CANTEEN_ORDER_123
            $uniqueId = $idPrefix . '_' . $rawId;

            $payload = [
                'id' => (string)$uniqueId,
                'type' => 'sql',
                'keywords' => $uniqueId . ' ' . json_encode($data),
                'data' => $data // Laravel sẽ tự chuyển Model thành JSON
            ];

            // Gửi request POST (timeout 2 giây để không làm chậm web chính)
            Http::withHeaders([
                'x-api-key' => $this->apiKey
            ])->timeout(2)->post($this->baseUrl . '/backup', $payload);

            Log::info("Backup success: $uniqueId");

        } catch (\Exception $e) {
            // Ghi log lỗi nếu không kết nối được, không làm sập web
            Log::error("Backup failed: " . $e->getMessage());
        }
    }

    /**
     * Hàm xóa dữ liệu bên Server Backup
     */
    public function delete($rawId, $idPrefix = 'PHP')
    {
        try {
            $uniqueId = $idPrefix . '_' . $rawId;

            Http::withHeaders([
                'x-api-key' => $this->apiKey
            ])->timeout(2)->delete($this->baseUrl . '/backup', [
                'id' => $uniqueId
            ]);

            Log::info("Backup delete sent: $uniqueId");

        } catch (\Exception $e) {
            Log::error("Backup delete failed: " . $e->getMessage());
        }
    }
}
