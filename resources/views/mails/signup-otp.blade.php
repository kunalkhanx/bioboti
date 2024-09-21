<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up OTP</title>
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
        .otp-code {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
            letter-spacing: 2px;
        }
        .footer {
            background-color: #f4f4f4;
            color: #888888;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }
        a {
            color: #0073e6;
            text-decoration: none;
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
                <p>Thank you for registering with Biolinkar! To complete your registration, please use the following One-Time Password (OTP):</p>
                
                <!-- OTP Code -->
                <p class="otp-code">{{$otp}}</p>

                <p>This OTP is valid for the next 5 minutes. If you didn't request this, please ignore this email.</p>
                <p>If you have any issues, feel free to contact us at contact@biolinkar.com.</p>
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
