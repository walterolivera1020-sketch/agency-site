<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Admin Dashboard'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800">

    <div class="min-h-screen flex">
        <?php echo $__env->make('admin.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="flex-1 min-w-0 flex flex-col">
            <?php echo $__env->make('admin.partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <main class="p-4 sm:p-6 lg:p-8">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

</body>
</html><?php /**PATH C:\Users\user\agency-site\resources\views/layouts/admin.blade.php ENDPATH**/ ?>