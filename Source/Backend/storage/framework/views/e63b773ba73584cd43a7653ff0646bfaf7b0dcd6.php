<?php $__env->startSection('content'); ?>
  <div class="row pe-3 mb-3">
    <div class="col-12 pe-0">
      <?php echo $__env->yieldContent('heading'); ?>
    </div>
  </div>
  <div class="row pe-3">
    <div class="col-2">
      <?php echo $__env->yieldContent('subnav'); ?>
    </div>
    <div class="col-10 px-0">
      <?php echo $__env->yieldContent('subcontent'); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.control-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/layouts/show.blade.php ENDPATH**/ ?>
