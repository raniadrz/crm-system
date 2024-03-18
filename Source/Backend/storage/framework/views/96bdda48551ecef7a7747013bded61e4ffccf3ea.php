<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-4 pe-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">User name</h6>
        <h2 class="card-subtitle"><?php echo e($user->name); ?></h2>
      </div>
      <div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user)): ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.anchor','data' => ['href' => route('users.edit', $user),'content' => 'Edit user','size' => 'small','color' => 'warning','class' => 'my-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.anchor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.edit', $user)),'content' => 'Edit user','size' => 'small','color' => 'warning','class' => 'my-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $user)): ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.form','data' => ['action' => route('users.destroy', $user),'content' => 'Delete user','size' => 'small','color' => 'danger','class' => 'my-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('users.destroy', $user)),'content' => 'Delete user','size' => 'small','color' => 'danger','class' => 'my-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-3 px-3">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Email</h6>
        <h6 class="card-subtitle"><?php echo e($user->email); ?></h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1">Phone</h6>
        <h6 class="card-subtitle"><?php echo e($user->phone); ?></h6>
      </div>
    </div>
    <div class="ps-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Address</h6>
        <h6 class="card-subtitle"><?php echo e($user->address); ?></h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1">Role</h6>
        <h6 class="card-subtitle"><?php echo e($user->roles->first()->title); ?></h6>
      </div>
    </div>
  </div>
</div>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/control-panel/users/show/partials/info.blade.php ENDPATH**/ ?>
