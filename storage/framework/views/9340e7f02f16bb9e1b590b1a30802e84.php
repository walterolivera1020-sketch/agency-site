

<?php $__env->startSection('content'); ?>
<div class="bg-white shadow-lg rounded-2xl p-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Admin Login</h1>
        <p class="text-gray-500 mt-2">Sign in to access the dashboard</p>
    </div>

    <form action="#" method="POST" class="space-y-5">
        <?php echo csrf_field(); ?>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter admin email"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
            >
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter password"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
            >
        </div>

        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 text-gray-600">
                <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                Remember me
            </label>

            <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
        </div>

        <button
            type="submit"
            class="w-full bg-indigo-600 text-white py-3 rounded-xl font-semibold hover:bg-indigo-700 transition"
        >
            Sign In
        </button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\agency-site\resources\views/auth/login.blade.php ENDPATH**/ ?>