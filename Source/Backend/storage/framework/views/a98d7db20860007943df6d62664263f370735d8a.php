<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['action', 'content', 'color', 'size' => 'medium', 'method' => 'DELETE']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['action', 'content', 'color', 'size' => 'medium', 'method' => 'DELETE']); ?>
<?php foreach (array_filter((['action', 'content', 'color', 'size' => 'medium', 'method' => 'DELETE']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$buttonClass = 'btn btn-' . $color . ' bg-gradient';

if ($size === 'small') {
    $buttonClass .= ' btn-sm';
} elseif ($size === 'large') {
    $buttonClass .= ' btn-lg';
}
?>

<form method="POST" action="<?php echo e($action); ?>" <?php echo e($attributes->merge([
    'class' => 'd-inline',
])); ?>>
  <?php echo csrf_field(); ?>
  <?php echo method_field($method); ?>
  <button type="submit" class="<?php echo e($buttonClass); ?>"><?php echo e($content); ?></button>
</form>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/components/buttons/form.blade.php ENDPATH**/ ?>