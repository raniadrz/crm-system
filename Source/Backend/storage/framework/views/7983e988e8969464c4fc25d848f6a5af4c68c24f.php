<?php $__env->startSection('content'); ?>
<h3>Welcome <?php echo e(Auth::user()->name); ?></h3>
<br>
  <div class="card-group">
    <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entity => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card">
        <div class="card-body">
            <h4 class="card-title"><?php echo e($count); ?></h4>
            <p class="card-text"><small class="text-muted"><?php echo e($entity); ?></small></p>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.control-panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/dashboard/index.blade.php ENDPATH**/ ?>