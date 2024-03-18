<nav class="navbar bg-dark sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand text-white" href="">CRM</a>

    <li class="dropdown">
      <a class="dropdown-toggle text-decoration-none text-white" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo e(auth()->user()->name); ?>

      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
          <a class="dropdown-item" href="<?php echo e(route('users.show', auth()->user())); ?>"><i
              class="bi bi-person-fill me-2"></i>Profile</a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
          </form>
          <a class="dropdown-item" id="logout-anchor" href=""><i class="bi bi-box-arrow-left me-2"></i>Sign out</a>
        </li>
      </ul>
    </li>
  </div>
</nav>

<?php $__env->startSection('script'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('script'); ?>
  document.getElementById('logout-anchor').addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById('logout-form').submit();
  });
<?php $__env->stopSection(); ?>
<?php /**PATH /Users/ouraniantrizi/Desktop/Customer-Relationship-Management-System-main/resources/views/components/nav/topnav.blade.php ENDPATH**/ ?>