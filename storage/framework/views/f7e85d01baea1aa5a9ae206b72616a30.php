<aside class="w-64 bg-gray-900 text-white min-h-screen p-6 hidden md:block">
    <div class="mb-10">
        <h2 class="text-2xl font-bold">Joseline</h2>
        <p class="text-sm text-gray-400 mt-1">International Manpower Corporation</p>
    </div>

    <nav class="space-y-2">
        <a href="<?php echo e(route('admin.dashboard')); ?>"
            class="flex items-center gap-3 px-4 py-3 rounded-xl bg-indigo-600 text-white">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m0-8H5m7 0h7" />
            </svg>
            Dashboard
        </a>

        <a href="<?php echo e(route('admin.inquiries.index')); ?>"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-800 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 10h8m-8 4h6m5 5H5a2 2 0 01-2-2V7a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2z" />
            </svg>
            Inquiries
        </a>

        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-800 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 17v-6h13v6M9 5h13v4H9V5zM2 5h5v12H2V5z" />
            </svg>
            Jobs
        </a>

        <a href="#"
            class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-800 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10m-11 9h12a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v11a2 2 0 002 2z" />
            </svg>
            Applications
        </a>

        <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button
                type="submit"
                class="w-full flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-800 transition text-left">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7" />
                </svg>
                Logout
            </button>
        </form>
    </nav>
</aside><?php /**PATH C:\Users\user\agency-site\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>