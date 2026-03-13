

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-2xl shadow-sm p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Inquiry Details</h2>
        <a href="<?php echo e(route('admin.inquiries.index')); ?>" class="text-indigo-600 hover:underline">Back</a>
    </div>

    <?php if(session('success')): ?>
        <div class="mb-4 rounded-lg bg-green-100 border border-green-200 text-green-700 px-4 py-3">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="space-y-4">
        <div>
            <p class="text-sm text-gray-500">Full Name</p>
            <p class="font-medium text-gray-800"><?php echo e($inquiry->full_name); ?></p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="font-medium text-gray-800"><?php echo e($inquiry->email); ?></p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Phone</p>
            <p class="font-medium text-gray-800"><?php echo e($inquiry->phone ?? 'N/A'); ?></p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Position</p>
            <p class="font-medium text-gray-800"><?php echo e($inquiry->position ?? 'General Inquiry'); ?></p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Message</p>
            <div class="mt-2 p-4 bg-gray-50 rounded-xl border text-gray-700 whitespace-pre-line">
                <?php echo e($inquiry->message); ?>

            </div>
        </div>

        <div>
            <p class="text-sm text-gray-500">Status</p>
            <p class="font-medium text-gray-800"><?php echo e(ucfirst($inquiry->status)); ?></p>
        </div>

        <div class="pt-4 flex gap-3">
            <a href="mailto:<?php echo e($inquiry->email); ?>"
               class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Reply by Email
            </a>

            <form action="<?php echo e(route('admin.inquiries.replied', $inquiry)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <button type="submit"
                    class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    Mark as Replied
                </button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\user\agency-site\resources\views/admin/inquiries/show.blade.php ENDPATH**/ ?>