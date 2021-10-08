<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg navbar-dark custom-bg-light">

    <div class="container">
          <a class="navbar-brand" href="#">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.svg" alt="" width="70" height="50">
          </a>

          <button class="navbar-toggler" 
                  type="button" 
                  data-bs-toggle="collapse" 
                  data-bs-target="#navbarSupportedContent" 
                  ria-controls="navbarSupportedContent" 
                  aria-expanded="false" 
                  ria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php wp_nav_menu(array(
            "theme_location" => "main-menu",
            'depth'           => 2,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
            
            )); 
          ?>
        </div> 

        <div class="header-search">
            <?php get_search_form(); ?>
        </div>
    </nav>
