<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inquiry Received</title>
</head>
<body>
    <h2>Hello {{ $inquiry->full_name }},</h2>

    <p>Thank you for contacting Joseline International Manpower Corporation.</p>

    <p>We have received your inquiry and our team will review it as soon as possible.</p>

    <p><strong>Your submitted message:</strong></p>
    <p>{{ $inquiry->message }}</p>

    <p>Best regards,<br>Joseline International Manpower Corporation</p>
</body>
</html>