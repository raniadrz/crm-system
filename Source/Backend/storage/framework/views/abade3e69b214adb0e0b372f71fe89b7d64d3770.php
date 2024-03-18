<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['message', 'color' => 'light']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['message', 'color' => 'light']); ?>
<?php foreach (array_filter((['message', 'color' => 'light']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$divAdditionalClass = $color == 'light' ? 'bg-light' : 'text-white bg-' . $color;
$buttonAdditionalClass = $color == 'light' ? '' : 'btn-close-white';
?>

<div
  <?php echo e($attributes->merge([
      'class' => 'toast align-items-center fixed-bottom ms-4 mb-4 ' . $divAdditionalClass,
      'role' => 'alert',
      'aria-live' => 'assertive',
      'aria-atomic' => 'true',
  ])); ?>>
  <div class="d-flex">
    <div class="toast-body">
      <?php echo e($message); ?>

    </div>
    <button type="button" class="btn-close me-2 <?php echo e($buttonAdditionalClass); ?> m-auto" data-bs-dismiss="toast"
      aria-label="Close"></button>
  </div>
</div>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/components/alerts/toast.blade.php ENDPATH**/ ?>
