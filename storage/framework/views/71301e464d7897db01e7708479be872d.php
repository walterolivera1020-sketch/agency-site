

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-2xl shadow-sm p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Inquiries</h2>
    </div>

    <?php if(session('success')): ?>
        <div class="mb-4 rounded-lg bg-green-100 border border-green-200 text-green-700 px-4 py-3">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b text-sm text-gray-500">
                    <th class="py-3">Name</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Position</th>
                    <th class="py-3">Status</th>
                    <th class="py-3">Date</th>
                    <th class="py-3">Action</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                <?php $__empty_1 = true; $__currentLoopData = $inquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="border-b border-gray-100">
                        <td class="py-4"><?php echo e($inquiry->full_name); ?></td>
                        <td class="py-4"><?php echo e($inquiry->email); ?></td>
                        <td class="py-4"><?php echo e($inquiry->position ?? 'General Inquiry'); ?></td>
                        <td class="py-4">
                            <span class="px-3 py-1 rounded-full text-xs
                                <?php if($inquiry->status === 'new'): ?> bg-red-100 text-red-700
                                <?php elseif($inquiry->status === 'read'): ?> bg-yellow-100 text-yellow-700
                                <?php else: ?> bg-green-100 text-green-700
                                <?php endif; ?>">
                                <?php echo e(ucfirst($inquiry->status)); ?>

                            </span>
                        </td>
                        <td class="py-4"><?php echo e($inquiry->created_at->format('M d, Y h:i A')); ?></td>
                        <td class="py-4">
                            <a href="<?php echo e(route('admin.inquiries.show', $inquiry)); ?>"
                               class="text-indigo-600 hover:underline font-medium">
                                View
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="py-6 text-center text-gray-500">No inquiries found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <?php echo e($inquiries->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\agency-site\resources\views/admin/inquiries/index.blade.php ENDPATH**/ ?>