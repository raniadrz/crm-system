<?php $__env->startSection('heading'); ?>
  <?php echo $__env->make('control-panel.organizations.show.partials.info', [
      'organization' => $organization,
  ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subnav'); ?>
  <?php echo $__env->make('control-panel.organizations.show.partials.sidenav', [
      'activeOrganizationNav' => $activeOrganizationNav,
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

<?php echo $__env->make('layouts.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/control-panel/organizations/show/layout.blade.php ENDPATH**/ ?>
