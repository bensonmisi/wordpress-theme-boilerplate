<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morgan Zintec</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet"/>
    <?php wp_head() ?>
</head>
<body>
    <header>
    <div class="quicklinks">
     
            
                    <div class="quick-menu d-none d-sm-none d-md-none d-lg-block">
                        <div class="row quick-contacts">
                            <div class="col-md-9">
                  <?php
                       
                        
                       wp_nav_menu( array('theme_location'=>'quicklinks','menu_class'=>'top-bar') );
                  ?>
                                 </div>
                                 <div class="col-md-3 quick-contacts text-right">
                                 <?php if(is_active_sidebar('quick-contact')): ?>
                                    <?php dynamic_sidebar('quick-contact'); ?>
                                 <?php endif; ?>
                                 </div>
                            </div>
                  </div>
                  <div class="dropdown d-block d-md-none  pt-2 pb-2 ">
                    <button class="btn btn-link btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quick Links
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php

                        wp_nav_menu( array('theme_location'=>'quicklinks','menu_class'=>'dropdown-item') );
                        ?>
                       
                    </div>
                    </div>
                
        
    </div>
    <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
    <?php the_custom_logo(); ?>
    </a>
         <div class="collapse navbar-collapse" id="navbarText">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'menu_class'        => 'nav navbar-nav mr-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
         <div class="navbar-text ml-auto d-flex">
           <div><i class="fa fa-facebook-square mr-2" aria-hidden="true"></i></div>
           <div><i class="fa fa-twitter-square mr-2" aria-hidden="true"></i></div>
           <div><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
        </div>
        </div>
    </div>
</nav>
    </header>