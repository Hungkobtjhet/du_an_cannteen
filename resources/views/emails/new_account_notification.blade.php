<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo tài khoản mới</title>
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
            font-size: 22px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 15px;
        }

        .alert {
            background-color: #ff6347;
            color: white;
            padding: 10px 15px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        table td {
            background-color: #ffffff;
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
            margin: 20px 0;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ config('site.url') . 'assets/images/logo_light.png' }}" alt="Logo">
        </div>

        <!-- Greeting -->
        <h1>Chào mừng, {{ $user->first_name }},</h1>

        <!-- Introduction -->
        <p><strong>{{ config('site.name') }} - Tài khoản mới của bạn</strong></p>
        <p>Một tài khoản đã được tạo cho bạn trên {{ config('site.name') }}.</p>

        <!-- Alert -->
        <div class="alert">Vui lòng sử dụng thông tin đăng nhập sau để đăng nhập</div>

        <!-- Credentials -->
        <table>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Mật khẩu</th>
                <td>{{ $password }}</td>
            </tr>
            <tr>
                <th>Liên kết đăng nhập</th>
                <td><a href="{{ route('admin.login') }}">{{ route('admin.login') }}</a></td>
            </tr>
        </table>

        <p><strong>Quan trọng:</strong> Mã xác nhận sẽ được gửi cho bạn khi bạn thử đăng nhập lần đầu tiên. Sử dụng mật khẩu một lần này để thay đổi mật khẩu và truy cập vào bảng quản trị.</p>

        <!-- Footer -->
        <div class="footer">
            <hr>
            <p>Nếu bạn tin rằng email này không dành cho bạn, vui lòng bỏ qua hoặc liên hệ với chúng tôi tại <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>.</p>
            <p>Trân trọng,<br>{{ config('site.name') }}</p>
        </div>
    </div>

</body>
</html>
