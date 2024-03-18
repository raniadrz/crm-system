<div class="list-group">
  <a class="list-group-item list-group-item-action <?php if($activeOrganizationNav == 'clients'): ?> active <?php endif; ?>"
    href="<?php echo e(route('organizations.clients.index', $organization)); ?>">Clients</a>
  <a class="list-group-item list-group-item-action <?php if($activeOrganizationNav == 'projects'): ?> active <?php endif; ?>"
    href="<?php echo e(route('organizations.projects.index', $organization)); ?>">Projects</a>
  <a class="list-group-item list-group-item-action <?php if($activeOrganizationNav == 'documents'): ?> active <?php endif; ?>"
    href="<?php echo e(route('organizations.documents.index', $organization)); ?>">Documents</a>
</div>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/organizations/show/partials/sidenav.blade.php ENDPATH**/ ?>