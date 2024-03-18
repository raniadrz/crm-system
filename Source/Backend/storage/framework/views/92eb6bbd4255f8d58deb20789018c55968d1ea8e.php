<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-3 pe-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Task title</h6>
        <h2 class="card-subtitle"><?php echo e($task->title); ?></h2>
      </div>
      <div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $task)): ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.anchor','data' => ['href' => route('tasks.edit', $task),'content' => 'Edit task','size' => 'small','color' => 'warning','class' => 'my-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.anchor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('tasks.edit', $task)),'content' => 'Edit task','size' => 'small','color' => 'warning','class' => 'my-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $task)): ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.form','data' => ['action' => route('tasks.destroy', $task),'content' => 'Delete task','size' => 'small','color' => 'danger','class' => 'my-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('tasks.destroy', $task)),'content' => 'Delete task','size' => 'small','color' => 'danger','class' => 'my-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-2 px-3">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Project</h6>
        <h6 class="card-subtitle">
          <a href="<?php echo e(route('projects.show', $task->project)); ?>"><?php echo e($task->project->title); ?></a>
        </h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1">Assigned</h6>
        <h6 class="card-subtitle">
          <?php if(isset($task->user)): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $task->user)): ?>
              <a href="<?php echo e(route('users.show', $task->user)); ?>"><?php echo e($task->user->name); ?></a>
            <?php else: ?>
              <p class="my-auto"><?php echo e($task->user->name); ?></p>
            <?php endif; ?>
          <?php else: ?>
            Deleted user
          <?php endif; ?>
        </h6>
      </div>
    </div>
    <div class="col-2 px-3">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Deadline</h6>
        <h6 class="card-subtitle"><?php echo e($task->deadline->toDateString()); ?></h6>
      </div>
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Created at</h6>
        <h6 class="card-subtitle"><?php echo e($task->created_at->toDateString()); ?></h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1">Status</h6>
        <h6 class="card-subtitle"><?php echo e($task->status->name); ?></h6>
      </div>
    </div>
    <div class="ps-2">
      <h6 class="card-subtitle text-muted mb-1">Description</h6>
      <p class="card-subtitle"><?php echo e($task->description); ?></p>
    </div>
  </div>
</div>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/control-panel/tasks/show/partials/info.blade.php ENDPATH**/ ?>
