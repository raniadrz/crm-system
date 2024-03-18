<?php
if (!isset($activeNavItem)) {
    $activeNavItem = null;
}
?>

<nav class="col-2 h-100 px-0 navbar position-fixed navbar-expand-lg bg-dark d-flex align-items-start">
  <div class="container px-0">
    <ul class="navbar-nav flex-column mx-auto">
      <li class="nav-item">
        <a class="nav-link <?php if($activeNavItem === 'dashboard'): ?> bg-primary bg-gradient <?php endif; ?> ps-3 pe-5 text-white" href="<?php echo e(route('dashboard')); ?>">
          <i class="bi bi-house-door-fill me-2"></i>
          Dashboard
        </a>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\User::class)): ?>
        <li class="nav-item">
          <a class="nav-link <?php if($activeNavItem === 'users'): ?> bg-primary bg-gradient <?php endif; ?> ps-3 pe-5 text-white"
            href="<?php echo e(route('users.index')); ?>">
            <i class="bi bi-people-fill me-2"></i>
            Users
          </a>
        </li>
      <?php endif; ?>

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Client::class)): ?>
        <li class="nav-item">
          <a class="nav-link <?php if($activeNavItem === 'clients'): ?> bg-primary bg-gradient <?php endif; ?> ps-3 pe-5 text-white"
            href="<?php echo e(route('clients.index')); ?>">
            <i class="bi bi-person-lines-fill me-2"></i>
            Clients
          </a>
        </li>
      <?php endif; ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Organization::class)): ?>
        <li class="nav-item">
          <a class="nav-link <?php if($activeNavItem === 'organizations'): ?> bg-primary bg-gradient <?php endif; ?> ps-3 pe-5 text-white"
            href="<?php echo e(route('organizations.index')); ?>">
            <i class="bi bi-door-open-fill me-2"></i>
            Organizations
          </a>
        </li>
      <?php endif; ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Project::class)): ?>
        <li class="nav-item">
          <a class="nav-link <?php if($activeNavItem === 'projects'): ?> bg-primary bg-gradient <?php endif; ?> ps-3 pe-5 text-white"
            href="<?php echo e(route('projects.index')); ?>">
            <i class="bi bi-briefcase-fill me-2"></i>
            Projects
          </a>
        </li>
      <?php endif; ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', App\Models\Task::class)): ?>
        <li class="nav-item">
          <a class="nav-link <?php if($activeNavItem === 'tasks'): ?> bg-primary bg-gradient <?php endif; ?> ps-3 pe-5 text-white"
            href="<?php echo e(route('tasks.index')); ?>">
            <i class="bi bi-clipboard2-check-fill me-2"></i>
            Tasks
          </a>
        </li>
      <?php endif; ?>
      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('viewAny', Silber\Bouncer\Database\Role::class)): ?>
        <li class="nav-item">
          <a class="nav-link <?php if($activeNavItem === 'roles'): ?> bg-primary bg-gradient <?php endif; ?> ps-3 pe-5 text-white"
            href="<?php echo e(route('roles.index')); ?>">
            <i class="bi bi-incognito me-2"></i>
            Roles
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<?php /**PATH /Users/ouraniantrizi/Documents/crm-system/Source/Backend/resources/views/components/nav/sidenav.blade.php ENDPATH**/ ?>