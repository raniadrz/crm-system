<div class="card">
  <div class="card-body d-flex pt-4">
    <div class="col-3 pe-2">
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Project title</h6>
        <h2 class="card-subtitle"><?php echo e($project->title); ?></h2>
      </div>
      <div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $project)): ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.anchor','data' => ['href' => route('projects.edit', $project),'content' => 'Edit project','size' => 'small','color' => 'warning','class' => 'my-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.anchor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('projects.edit', $project)),'content' => 'Edit project','size' => 'small','color' => 'warning','class' => 'my-1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $project)): ?>
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.form','data' => ['action' => route('projects.destroy', $project),'content' => 'Delete project','size' => 'small','color' => 'danger','class' => 'my-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('projects.destroy', $project)),'content' => 'Delete project','size' => 'small','color' => 'danger','class' => 'my-1']); ?>
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
        <h6 class="card-subtitle text-muted mb-1">Client</h6>
        <h6 class="card-subtitle">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $project->client)): ?>
            <a href="<?php echo e(route('clients.show', $project->client)); ?>"><?php echo e($project->client->name); ?></a>
          <?php else: ?>
            <p class="my-auto"><?php echo e($project->client->name); ?></p>
          <?php endif; ?>
        </h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1">Manager</h6>
        <h6 class="card-subtitle">
          <?php if(isset($project->manager)): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $project->manager)): ?>
              <a href="<?php echo e(route('users.show', $project->manager)); ?>"><?php echo e($project->manager->name); ?></a>
            <?php else: ?>
              <p class="my-auto"><?php echo e($project->manager->name); ?></p>
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
        <h6 class="card-subtitle"><?php echo e($project->deadline->toDateString()); ?></h6>
      </div>
      <div class="mb-3">
        <h6 class="card-subtitle text-muted mb-1">Created at</h6>
        <h6 class="card-subtitle"><?php echo e($project->created_at->toDateString()); ?></h6>
      </div>
      <div class="align-bottom">
        <h6 class="card-subtitle text-muted mb-1">Status</h6>
        <h6 class="card-subtitle"><?php echo e($project->status->name); ?></h6>
      </div>
    </div>
    <div class="ps-2">
      <h6 class="card-subtitle text-muted mb-1">Description</h6>
      <p class="card-subtitle"><?php echo e($project->description); ?></p>
    </div>
  </div>
</div>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/projects/show/partials/info.blade.php ENDPATH**/ ?>