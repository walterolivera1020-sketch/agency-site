<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Admin Login'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-md">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

</body>
</html><?php /**PATH C:\Users\user\agency-site\resources\views/layouts/auth.blade.php ENDPATH**/ ?>