<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Inquiry</title>
</head>
<body>
    <h2>New Inquiry Received</h2>

    <p><strong>Name:</strong> {{ $inquiry->full_name }}</p>
    <p><strong>Email:</strong> {{ $inquiry->email }}</p>
    <p><strong>Phone:</strong> {{ $inquiry->phone ?? 'N/A' }}</p>
    <p><strong>Position:</strong> {{ $inquiry->position ?? 'General Inquiry' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $inquiry->message }}</p>
</body>
</html>