<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition block">
        <p class="text-sm text-slate-500">Total Users</p>
        <h3 class="text-3xl font-bold text-slate-800 mt-2">1,245</h3>
        <p class="text-sm text-green-600 mt-2">+12% this month</p>
    </a>

    <a href="<?php echo e(route('admin.jobs.index')); ?>" class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition block">
        <p class="text-sm text-slate-500">Active Jobs</p>
        <h3 class="text-3xl font-bold text-slate-800 mt-2">58</h3>
        <p class="text-sm text-blue-600 mt-2">8 newly posted</p>
    </a>

    <a href="<?php echo e(route('admin.applications.index')); ?>" class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition block">
        <p class="text-sm text-slate-500">Applications</p>
        <h3 class="text-3xl font-bold text-slate-800 mt-2">324</h3>
        <p class="text-sm text-yellow-600 mt-2">24 pending review</p>
    </a>

    <a href="<?php echo e(route('admin.inquiries.index')); ?>" class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition block">
        <p class="text-sm text-slate-500">Messages</p>
        <h3 class="text-3xl font-bold text-slate-800 mt-2">19</h3>
        <p class="text-sm text-red-600 mt-2">5 unread inquiries</p>
    </a>
</div><?php /**PATH C:\Users\user\agency-site\resources\views/admin/partials/stats-cards.blade.php ENDPATH**/ ?>