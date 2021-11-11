<?php
function load_css(){

wp_register_style( 'bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');
wp_register_style( 'fonts',get_template_directory_uri().'/fonts/css/font-awesome.min.css',array(),false,'all');
wp_enqueue_style( 'fonts');
wp_enqueue_style( 'bootstrap');
wp_register_style( 'theme',get_template_directory_uri().'/css/theme.css',array(),false,'all');
wp_enqueue_style( 'theme');
}

function load_scripts(){
wp_register_script('jquery','https://code.jquery.com/jquery-2.2.4.js',array(),'',true);
 wp_enqueue_script('jquery');
 wp_register_script( 'popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
 wp_enqueue_script( 'popper' );
 wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),false,true );
 wp_register_script( 'bootstrap-bundle', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'),false,true );
 wp_enqueue_script('bootstrap');
 wp_enqueue_script('bootstrap-bundle');
}

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function my_positions(){
    register_sidebar( 
        array(
            'name'=>'Top contacts',
            'id'=>'quick-contact',
            'before_title'=>'<h4 class="widget-title">',
            'after_title'=>'</h4>'
            )
        );
        register_sidebar( 
            array(
                'name'=>'Position 1',
                'id'=>'position-1',
                'before_title'=>'<h4 class="widget-title">',
                'after_title'=>'</h4>'
                )
            );
            register_sidebar( 
            array(
                'name'=>'Blog Sidebar',
                'id'=>'blog-sidebar',
                'before_title'=>'<h4 class="widget-title">',
                'after_title'=>'</h4>'
                )
            );

            register_sidebar( 
                array(
                    'name'=>'Footer 1',
                    'id'=>'footer1',
                    'before_widget'=>'<div class="mt-4">',
                    'after_widget'=>'</div>',
                    'before_title'=>'<h4 class="widget-title">',
                    'after_title'=>'</h4>'
                    )
                );

                register_sidebar( 
                    array(
                        'name'=>'Footer 2',
                        'id'=>'footer2',
                        'before_widget'=>'<div class="mt-4">',
                         'after_widget'=>'</div>',
                        'before_title'=>'<h4 class="widget-title">',
                        'after_title'=>'</h4>'
                        )
                    );

                    register_sidebar( 
                        array(
                            'name'=>'Footer 3',
                            'id'=>'footer3',
                            'before_widget'=>'<div class="mt-4">',
                            'after_widget'=>'</div>',
                            'before_title'=>'<h4 class="widget-title">',
                            'after_title'=>'</h4>'
                            )
                        );

                        register_sidebar( 
                            array(
                                'name'=>'Footer 4',
                                'id'=>'footer4',
                                'before_widget'=>'<div class="mt-4">',
                                'after_widget'=>'</div>',
                                'before_title'=>'<h4 class="widget-title">',
                                'after_title'=>'</h4>'
                                )
                            );
}
add_action('widgets_init','my_positions');
add_action( 'after_setup_theme', 'register_navwalker' );
add_action('wp_enqueue_scripts','load_css');
add_action('wp_enqueue_scripts','load_scripts');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'anixsys-theme' ),
    'quicklinks' => __( 'Quick Links', 'anixsys-theme' ),
) );

add_theme_support( 'custom-logo' );
add_theme_support( 'widgets' );
add_theme_support( 'post-thumbnails' );