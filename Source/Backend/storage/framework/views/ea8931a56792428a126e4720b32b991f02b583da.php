<?php $__env->startSection('content'); ?>
    <div class="mb-2">
        <?php echo $__env->yieldContent('heading'); ?>
    </div>
    <div class="card">
        <div class="card-body py-1">
            <?php echo $__env->yieldContent('table'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.control-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/layouts/index.blade.php ENDPATH**/ ?>
