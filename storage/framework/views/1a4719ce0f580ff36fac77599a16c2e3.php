<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body class="antialiased">
    <!-- Preloader -->
    <?php echo $__env->make('partials.preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Navigation -->
    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Mobile Menu -->
    <?php echo $__env->make('partials.mobile-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Hero Section -->
    <?php echo $__env->make('partials.home', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Stats Section -->
    <?php echo $__env->make('partials.stats', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- About Section with Image -->
    <?php echo $__env->make('partials.about', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Services Section with Images -->
    <?php echo $__env->make('partials.services', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Job Opportunities Section -->
    <?php echo $__env->make('partials.jobs', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Deployment Section with Country Images -->
    <?php echo $__env->make('partials.deployment', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Why Choose Us Section -->
    <?php echo $__env->make('partials.whyus', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Testimonials Section with Real Photos -->
    <?php echo $__env->make('partials.testimonials', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Contact Section -->
    <?php echo $__env->make('partials.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!-- Footer -->
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- JavaScript -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    
</body>

</html><?php /**PATH C:\Users\user\agency-site\resources\views/home.blade.php ENDPATH**/ ?>