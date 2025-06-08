<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kích hoạt tài khoản của bạn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
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
            color: #0073e6;
        }

        p {
            margin-bottom: 20px;
        }

        a.button {
            background-color: #ff6347;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        a.button:hover {
            background-color: #5a1105;
        }

        .link-text {
            font-family: monospace, sans-serif;
            color: #333;
            font-size: 14px;
            word-wrap: break-word;
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            display: block;
            margin-top: 20px;
            word-break: break-all;
        }

        .footer {
            font-size: 12px;
            text-align: center;
            color: #999;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
         <!-- Logo -->
         <div class="logo">
            <img src="{{ config('site.url') . 'assets/images/logo_light.png' }}" alt="Logo">
        </div>       

        <h1>Kích hoạt tài khoản của bạn</h1>
        <p>Xin chào {{ $user->first_name }},</p>
        <p>Cảm ơn bạn đã đăng ký với chúng tôi. Để kích hoạt tài khoản và truy cập bảng điều khiển quản trị, vui lòng nhấp vào nút bên dưới:</p>
        
        <a href="{{ $activationLink }}" class="button">Kích hoạt tài khoản</a>
        
        <p>Nếu bạn gặp sự cố khi nhấp vào nút, bạn có thể sao chép liên kết sau và dán vào trình duyệt của mình:</p>
        
        <p class="link-text">{{ $activationLink }}</p>

        <p>Nếu bạn không yêu cầu email này, vui lòng bỏ qua hoặc liên hệ với nhóm hỗ trợ của chúng tôi.</p>
    </div>

    <div class="footer">
        <p>Trân trọng,<br>{{ config('site.name') }}</p>
        <p>Đối với bất kỳ vấn đề nào, hãy liên hệ với chúng tôi tại <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></p>
    </div>

</body>
</html>
