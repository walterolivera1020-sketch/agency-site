<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Inquiry</title>
</head>
<body>
    <h2>New Inquiry Received</h2>

    <p><strong>Name:</strong> <?php echo e($inquiry->full_name); ?></p>
    <p><strong>Email:</strong> <?php echo e($inquiry->email); ?></p>
    <p><strong>Phone:</strong> <?php echo e($inquiry->phone ?? 'N/A'); ?></p>
    <p><strong>Position:</strong> <?php echo e($inquiry->position ?? 'General Inquiry'); ?></p>
    <p><strong>Message:</strong></p>
    <p><?php echo e($inquiry->message); ?></p>
</body>
</html><?php /**PATH C:\Users\user\agency-site\resources\views/emails/inquiry-received.blade.php ENDPATH**/ ?>