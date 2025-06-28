<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reset Password MindDump</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo {
            color: #0047FF;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }
        .content {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
        }
        .button {
            display: inline-block;
            background-color: #0047FF;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ route('welcome') }}" class="logo">MindDump</a>
    </div>

    <div class="content">
        <h2>Reset Password</h2>
        <p>Halo {{ $user->name }},</p>
        <p>Kami menerima permintaan untuk mereset password akun MindDump Anda. Jika Anda tidak melakukan permintaan ini, Anda dapat mengabaikan email ini.</p>
        
        <p>Untuk mereset password Anda, silakan klik tombol di bawah ini:</p>
        
        <div style="text-align: center;">
            <a href="{{ $resetUrl }}" class="button">Reset Password</a>
        </div>

        <p>Atau Anda dapat menyalin dan menempelkan URL berikut ke browser Anda:</p>
        <p style="word-break: break-all;">{{ $resetUrl }}</p>

        <p>Link ini akan kadaluarsa dalam 60 menit.</p>

        <p>Terima kasih,<br>Tim MindDump</p>
    </div>

    <div class="footer">
        <p>Email ini dikirim secara otomatis, mohon tidak membalas email ini.</p>
        <p>&copy; {{ date('Y') }} MindDump. All rights reserved.</p>
    </div>
</body>
</html> 