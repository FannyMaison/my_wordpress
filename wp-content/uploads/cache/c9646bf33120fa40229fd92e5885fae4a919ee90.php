<header class="banner">
  <div class="container">
    <a class="id" href="<?php echo e(home_url('/')); ?>"><img src="<?= App\asset_path('images/logo.svg'); ?>" alt="logo Fanny Maison"></a>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
