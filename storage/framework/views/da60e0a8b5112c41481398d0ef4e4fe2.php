

<?php
    $pageTitle = 'Applications';
    $pageSubtitle = 'Track and review all applicant submissions';
?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Applications List</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-slate-200 text-sm text-slate-500">
                    <th class="py-4">Applicant</th>
                    <th class="py-4">Position</th>
                    <th class="py-4">Country</th>
                    <th class="py-4">Status</th>
                    <th class="py-4">Applied Date</th>
                </tr>
            </thead>
            <tbody class="text-sm text-slate-700">
                <tr class="border-b border-slate-100">
                    <td class="py-4 font-medium">Juan Dela Cruz</td>
                    <td class="py-4">Factory Worker</td>
                    <td class="py-4">Japan</td>
                    <td class="py-4"><span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">Pending</span></td>
                    <td class="py-4">Mar 13, 2026</td>
                </tr>
                <tr class="border-b border-slate-100">
                    <td class="py-4 font-medium">Maria Santos</td>
                    <td class="py-4">Caregiver</td>
                    <td class="py-4">Canada</td>
                    <td class="py-4"><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Approved</span></td>
                    <td class="py-4">Mar 12, 2026</td>
                </tr>
                <tr>
                    <td class="py-4 font-medium">Jose Reyes</td>
                    <td class="py-4">Driver</td>
                    <td class="py-4">UAE</td>
                    <td class="py-4"><span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold">Reviewing</span></td>
                    <td class="py-4">Mar 11, 2026</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\agency-site\resources\views/admin/applications/index.blade.php ENDPATH**/ ?>