<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['content', 'color', 'size' => 'medium']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['content', 'color', 'size' => 'medium']); ?>
<?php foreach (array_filter((['content', 'color', 'size' => 'medium']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
if ($size === 'small') {
    $attributes = $attributes->merge(['class' => ' btn-sm']);
} elseif ($size === 'large') {
    $attributes = $attributes->merge(['class' => ' btn-lg']);
}
?>

<input type="submit" value="<?php echo e($content); ?>"
  <?php echo e($attributes->merge([
      'class' => 'btn btn-' . $color . ' bg-gradient',
  ])); ?>>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/components/forms/submit.blade.php ENDPATH**/ ?>