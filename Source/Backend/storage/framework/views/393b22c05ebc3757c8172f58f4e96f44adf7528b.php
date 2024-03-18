<div class="list-group">
  <a class="list-group-item list-group-item-action <?php if($activeClientNav == 'projects'): ?> active <?php endif; ?>"
    href="<?php echo e(route('clients.projects.index', $client)); ?>">Projects</a>
  <a class="list-group-item list-group-item-action <?php if($activeClientNav == 'documents'): ?> active <?php endif; ?>"
    href="<?php echo e(route('clients.documents.index', $client)); ?>">Documents</a>
</div>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/clients/show/partials/sidenav.blade.php ENDPATH**/ ?>