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
    $classes = 'btn bg-gradient';

    if ($size === 'small') {
        $classes .= ' btn-sm';
    } elseif ($size === 'large') {
        $classes .= ' btn-lg';
    }
?>

<a <?php echo e($attributes->merge(['class' => $classes . ' btn-' . $color])); ?>>
    <i class="bi bi-plus"></i> <?php echo e($content); ?>

</a>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/components/buttons/icon.blade.php ENDPATH**/ ?>
