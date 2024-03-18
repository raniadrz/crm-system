<?php $__env->startSection('heading'); ?>
<h1>Task Details</h1><br>
  <?php echo $__env->make('control-panel.tasks.show.partials.info', [
      'task' => $task,
  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subnav'); ?>
  <?php echo $__env->make('control-panel.tasks.show.partials.sidenav', [
      'activeTaskNav' => $activeTaskNav,
  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subcontent'); ?>
  <?php echo $__env->yieldContent('button'); ?>
  <div class="card">
    <div class="card-body py-1">
      <?php echo $__env->yieldContent('table'); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/control-panel/tasks/show/layout.blade.php ENDPATH**/ ?>
