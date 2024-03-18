<div class="list-group">
  <a class="list-group-item list-group-item-action <?php if($activeProjectNav == 'tasks'): ?> active <?php endif; ?>"
    href="<?php echo e(route('projects.tasks.index', $project)); ?>">Tasks</a>
  <a class="list-group-item list-group-item-action <?php if($activeProjectNav == 'documents'): ?> active <?php endif; ?>"
    href="<?php echo e(route('projects.documents.index', $project)); ?>">Documents</a>
</div>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/projects/show/partials/sidenav.blade.php ENDPATH**/ ?>