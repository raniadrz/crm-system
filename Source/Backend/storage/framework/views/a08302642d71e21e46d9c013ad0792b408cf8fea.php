<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['permissions']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['permissions']); ?>
<?php foreach (array_filter((['permissions']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="py-2">
  <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <button type="button" class="btn btn-light btn-sm m-1"><?php echo e($permission->title); ?></button>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="pt-3 pb-2">
      <h4 class="text-muted">No permissions found.</h4>
    </div>
  <?php endif; ?>
</div>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/components/permissions/table.blade.php ENDPATH**/ ?>
