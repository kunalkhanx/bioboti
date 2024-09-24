<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Password Reset Request</title>
    <style>
        /* General styling for email */
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        table {
            border-spacing: 0;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        td {
            padding: 20px;
        }
        .header {
            background-color: #374151;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .content {
            padding: 20px;
            font-size: 16px;
            line-height: 1.5;
        }
        .footer {
            background-color: #f4f4f4;
            color: #888888;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }
        .btn {
            color: #ffffff;
            background-color: #374151;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            display: inline-block;
            margin-top: 20px;
        }
        .link-text {
            color: #374151;
            word-break: break-all;
            font-size: 14px;
        }
        .text-white{
            color: #ffffff;
        }
        .text-dark{
            color: #374151;
            /* word-wrap: break-word; */
        }
    </style>
</head>
<body>
    <table>
        <!-- Header Section -->
        <tr>
            <td class="header">
                <h1>Biolinkar</h1>
            </td>
        </tr>
        <!-- Main Content Section -->
        <tr>
            <td class="content">
                <p>Hello {{$name}},</p>
                <p>We received a request to reset your password. You can reset your password by clicking the link below or copying and pasting it into your browser:</p>
                
                <!-- Password Reset Link as Button -->
                <p style="text-align: center;">
                    <a class="btn" href="{{$link}}"><span class="text-white">Reset Password</span></a>
                </p>

                <!-- Password Reset Link as Text -->
                <p>If the button above doesn't work, you can copy and paste this link:</p>
                <p class="link-text">{{$link}}</p>

                <p>If you didn't request a password reset, please ignore this email or contact us immediately.</p>
                <p>This link will expire in 60 minutes for your security.</p>
                <p>If you have any questions or need further assistance, please contact us at contact@biolinkar.com.</p>
                <p>Best regards,<br>Biolinkar Team</p>
            </td>
        </tr>
        <!-- Footer Section -->
        <tr>
            <td class="footer">
                <p>&copy; 2024 Biolinkar. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>
</html>
