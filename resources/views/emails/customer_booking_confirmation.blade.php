<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận đặt bàn của bạn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
            background-color: #000; /* Ensure a contrasting background */
            padding: 10px;
            border-radius: 5px;
        }

        .logo img {
            max-width: 150px;
        }

        h1 {
            color: #0056b3;
            text-align: left;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
            color: #666;
        }

        .footer hr {
            border: none;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ config('site.url').'assets/images/logo_light.png' }}" alt="Logo">
        </div>

        <!-- Greeting -->
        <h1>Xác nhận đặt bàn của bạn</h1>

        <!-- Booking Details -->
        <p>Kính thưa {{ $booking->name }},</p>
        <p>Việc đặt bàn của bạn đã được xác nhận:</p>
        <ul>
            <li><strong>Ngày:</strong> {{ $booking->date }}</li>
            <li><strong>Thời gian:</strong> {{ $booking->time }}</li>
            <li><strong>Số người:</strong> {{ $booking->persons }}</li>
        </ul>
        <p>Nếu bạn cần thực hiện bất kỳ thay đổi nào hoặc có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi.</p>
        <p><strong>Email:</strong> {{ config('site.email') }}</p>
 
        <!-- Footer -->
        <div class="footer">
            <hr>
            <p>Trân trọng,<br>{{ config('site.name') }}</p>
        </div>
    </div>
</body>
</html>
