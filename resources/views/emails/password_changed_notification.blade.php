<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo thay đổi mật khẩu</title>
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

        .alert {
            background-color: #cc2900;
            color: white;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
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
        <h1>Xin chào {{ $user->first_name }},</h1>

        <!-- Introduction -->
        <p><strong>{{ config('site.name') }} - Thông báo thay đổi mật khẩu</strong></p>
        <p>Mật khẩu của bạn đã được thay đổi thành công.</p>

        <!-- Alert -->
        <div class="alert">Nếu bạn không thực hiện thay đổi này, vui lòng liên hệ ngay với nhóm hỗ trợ của chúng tôi.</div>

        <p><strong>Email hỗ trợ:</strong> <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></p>

        <!-- Footer -->
        <div class="footer">
            <hr>
            <p>Trân trọng,<br>{{ config('site.name') }}</p>
        </div>
    </div>
</body>
</html>
