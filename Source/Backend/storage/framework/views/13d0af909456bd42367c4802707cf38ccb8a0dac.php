<div class="list-group">
  <a class="list-group-item list-group-item-action <?php if($activeRoleNav == 'permissions'): ?> active <?php endif; ?>"
    href="<?php echo e(route('roles.permissions.index', $role)); ?>">Permissions</a>
  <a class="list-group-item list-group-item-action <?php if($activeRoleNav == 'users'): ?> active <?php endif; ?>"
    href="<?php echo e(route('roles.users.index', $role)); ?>">Users</a>
</div>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/control-panel/roles/show/partials/sidenav.blade.php ENDPATH**/ ?>