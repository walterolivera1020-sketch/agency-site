<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body class="antialiased">
    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\user\OneDrive\Desktop\agency-site\resources\views/layouts/app.blade.php ENDPATH**/ ?>