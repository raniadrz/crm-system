<div class="list-group">
  <a class="list-group-item list-group-item-action <?php if($activeUserNav == 'projects'): ?> active <?php endif; ?>"
    href="<?php echo e(route('users.projects.index', $user)); ?>">Projects</a>
  <a class="list-group-item list-group-item-action <?php if($activeUserNav == 'tasks'): ?> active <?php endif; ?>"
    href="<?php echo e(route('users.tasks.index', $user)); ?>">Tasks</a>
</div>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/control-panel/users/show/partials/sidenav.blade.php ENDPATH**/ ?>
