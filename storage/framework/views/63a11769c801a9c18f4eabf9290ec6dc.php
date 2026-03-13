<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inquiry Received</title>
</head>
<body>
    <h2>Hello <?php echo e($inquiry->full_name); ?>,</h2>

    <p>Thank you for contacting Joseline International Manpower Corporation.</p>

    <p>We have received your inquiry and our team will review it as soon as possible.</p>

    <p><strong>Your submitted message:</strong></p>
    <p><?php echo e($inquiry->message); ?></p>

    <p>Best regards,<br>Joseline International Manpower Corporation</p>
</body>
</html><?php /**PATH C:\Users\user\agency-site\resources\views/emails/inquiry-auto-reply.blade.php ENDPATH**/ ?>