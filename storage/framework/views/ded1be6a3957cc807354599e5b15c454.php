

<?php
    $pageTitle = 'Jobs';
    $pageSubtitle = 'Manage all job postings';
?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Jobs Management</h2>
        <a href="#" class="px-4 py-2 rounded-xl bg-indigo-600 text-white hover:bg-indigo-700 transition font-semibold">
            Add New Job
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-slate-200 text-sm text-slate-500">
                    <th class="py-4">Job Title</th>
                    <th class="py-4">Country</th>
                    <th class="py-4">Category</th>
                    <th class="py-4">Status</th>
                    <th class="py-4">Posted Date</th>
                </tr>
            </thead>
            <tbody class="text-sm text-slate-700">
                <tr class="border-b border-slate-100">
                    <td class="py-4 font-medium">Factory Worker</td>
                    <td class="py-4">Japan</td>
                    <td class="py-4">Manufacturing</td>
                    <td class="py-4"><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Active</span></td>
                    <td class="py-4">Mar 10, 2026</td>
                </tr>
                <tr class="border-b border-slate-100">
                    <td class="py-4 font-medium">Caregiver</td>
                    <td class="py-4">Canada</td>
                    <td class="py-4">Healthcare</td>
                    <td class="py-4"><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Active</span></td>
                    <td class="py-4">Mar 09, 2026</td>
                </tr>
                <tr>
                    <td class="py-4 font-medium">Driver</td>
                    <td class="py-4">UAE</td>
                    <td class="py-4">Transport</td>
                    <td class="py-4"><span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">Draft</span></td>
                    <td class="py-4">Mar 07, 2026</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\agency-site\resources\views/admin/jobs/index.blade.php ENDPATH**/ ?>