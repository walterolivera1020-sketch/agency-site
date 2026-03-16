

<?php
    $pageTitle = 'Dashboard';
    $pageSubtitle = 'Welcome back, Admin';
?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.partials.stats-cards', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2 bg-white rounded-3xl shadow-sm p-6 border border-slate-100">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-bold text-slate-800">Recent Applications</h2>
                <a href="<?php echo e(route('admin.applications.index')); ?>" class="text-sm text-indigo-600 font-semibold hover:underline">View All</a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-slate-200 text-slate-500 text-sm">
                            <th class="py-3">Applicant</th>
                            <th class="py-3">Position</th>
                            <th class="py-3">Status</th>
                            <th class="py-3">Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-slate-700">
                        <tr class="border-b border-slate-100">
                            <td class="py-4">Juan Dela Cruz</td>
                            <td class="py-4">Factory Worker</td>
                            <td class="py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                    Pending
                                </span>
                            </td>
                            <td class="py-4">Mar 13, 2026</td>
                        </tr>
                        <tr class="border-b border-slate-100">
                            <td class="py-4">Maria Santos</td>
                            <td class="py-4">Caregiver</td>
                            <td class="py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                    Approved
                                </span>
                            </td>
                            <td class="py-4">Mar 12, 2026</td>
                        </tr>
                        <tr class="border-b border-slate-100">
                            <td class="py-4">Jose Reyes</td>
                            <td class="py-4">Driver</td>
                            <td class="py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700">
                                    Reviewing
                                </span>
                            </td>
                            <td class="py-4">Mar 11, 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Quick Actions</h2>

            <div class="space-y-3">
                <a href="<?php echo e(route('admin.jobs.index')); ?>" class="block w-full text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-2xl font-semibold hover:opacity-95 transition">
                    Manage Jobs
                </a>

                <a href="<?php echo e(route('admin.applications.index')); ?>" class="block w-full text-center bg-slate-100 text-slate-800 py-3 rounded-2xl font-semibold hover:bg-slate-200 transition">
                    Manage Applicants
                </a>

                <a href="<?php echo e(route('admin.inquiries.index')); ?>" class="block w-full text-center bg-slate-100 text-slate-800 py-3 rounded-2xl font-semibold hover:bg-slate-200 transition">
                    View Inquiries
                </a>
            </div>

            <div class="mt-8">
                <h3 class="text-lg font-semibold text-slate-800 mb-3">System Overview</h3>

                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-slate-600">Profile Completion</span>
                            <span class="font-medium text-slate-800">85%</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full w-[85%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-slate-600">Monthly Goal</span>
                            <span class="font-medium text-slate-800">60%</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full w-[60%]"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-slate-600">Inquiry Response Rate</span>
                            <span class="font-medium text-slate-800">92%</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2.5">
                            <div class="bg-purple-600 h-2.5 rounded-full w-[92%]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\agency-site\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>