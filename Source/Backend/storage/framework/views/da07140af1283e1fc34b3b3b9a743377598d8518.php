<?php
$options = [
    'All statuses' => '',
    'Open' => 'Open',
    'In-Progress' => 'In-Progress',
    'Closed' => 'Closed',
];
?>

<div class="col-2 ms-auto">
  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.select','data' => ['class' => 'd-inline','id' => 'status_filter_button','name' => 'status_filter','selected' => ''.e(request()->query('status')).'','options' => $options]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'd-inline','id' => 'status_filter_button','name' => 'status_filter','selected' => ''.e(request()->query('status')).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>

<?php $__env->startSection('script'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('script'); ?>
  document.getElementById('status_filter_button').addEventListener("change", function() {
    var status = this.value;
    var url = window.location.href.split('?')[0];

    if (status != '') {
      url += '?status=' + status;
    }

    window.location.replace(url);
  });
<?php $__env->stopSection(); ?>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/components/statuses/filter-button.blade.php ENDPATH**/ ?>
