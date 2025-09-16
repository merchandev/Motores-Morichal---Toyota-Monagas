<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://arturomerchan.com/wp-content/uploads/2025/09/FAVICON-TOYOTA_MONAGAS.png">
  <link rel="apple-touch-icon" href="https://arturomerchan.com/wp-content/uploads/2025/09/FAVICON-TOYOTA_MONAGAS.png">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header luxury-nav">
  <div class="nav-wrapper">
    <!-- Logo -->
    <div class="nav-logo">
      <a class="site-logo" href="<?php echo esc_url( home_url('/') ); ?>" aria-label="Inicio">
        <img src="https://arturomerchan.com/wp-content/uploads/2025/09/Logo_Toyota.png" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>" loading="eager" />
      </a>
    </div>

    <!-- Botón Hamburguesa -->
    <button class="nav-toggle" aria-label="Abrir menú" aria-controls="site-menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

    <!-- Menú principal de WordPress -->
    <nav class="nav-menu" role="navigation" aria-label="Menú principal">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-principal',
          'menu_class'     => 'menu-list',
          'menu_id'        => 'site-menu',
          'container'      => false,
          'fallback_cb'    => false,
        ));
      ?>
    </nav>
  </div>
</header>
