<?php $__env->startSection('heading'); ?>
  <?php echo $__env->make('control-panel.roles.show.partials.info', [
      'role' => $role,
  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subnav'); ?>
  <?php echo $__env->make('control-panel.roles.show.partials.sidenav', [
      'activeRoleNav' => $activeRoleNav,
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

<?php echo $__env->make('layouts.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/roles/show/layout.blade.php ENDPATH**/ ?>