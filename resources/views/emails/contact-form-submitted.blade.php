<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Portfolio Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; color: #0f172a; line-height: 1.6;">
    <h2 style="margin-bottom: 12px;">New Portfolio Contact Message</h2>
    <p style="margin: 0 0 8px;"><strong>Name:</strong> {{ $senderName }}</p>
    <p style="margin: 0 0 8px;"><strong>Email:</strong> {{ $senderEmail }}</p>
    <p style="margin: 16px 0 8px;"><strong>Message:</strong></p>
    <p style="white-space: pre-wrap; margin: 0;">{{ $senderMessage }}</p>
</body>
</html>
