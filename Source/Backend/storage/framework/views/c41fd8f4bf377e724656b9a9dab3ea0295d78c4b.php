<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h1 class="mt-1 mb-4"><?php echo $__env->yieldContent('title'); ?></h1>
            <hr>
            <form class="mt-4" method="POST" action="<?php echo $__env->yieldContent('action'); ?>">
                <?php echo csrf_field(); ?>
                <?php echo $__env->yieldContent('method'); ?>
                <?php echo $__env->yieldContent('input-fields'); ?>
                <?php echo $__env->yieldContent('submit-button'); ?>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.control-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/layouts/form.blade.php ENDPATH**/ ?>
