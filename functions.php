<!-- All code to extend the functionality -->
<?php

function init_template(){

//  Register theme support https://developer.wordpress.org/reference/functions/add_theme_support/
    add_theme_support('post-thumbnails');   // https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
    add_theme_support( 'title-tag');        // https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag

    // https://developer.wordpress.org/reference/functions/register_nav_menus/
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'      // 'Reference' => 'Definition in our administrator'
        )
    );

}


function assets(){
    // Next functions/hooks are executed in order

    // CSS files
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', '', '4.4.1','all');
    wp_register_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap','','1.0', 'all');
    wp_enqueue_style('estilos', get_stylesheet_uri(), array('bootstrap','montserrat'),'1.0', 'all');    // Version matches with the one indicated as commentary
    // get_stylesheet_uri() Retrieve the style, named as 'style.css' https://developer.wordpress.org/reference/functions/get_stylesheet_uri/

    // JS files
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js','','1.16.0', true); // Required previously to load Bootstrap. true === executed in the footer
    // Not required to load jquery, since it's incorporated by default by Wordpress
    wp_enqueue_script('boostraps', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery','popper'),'4.4.1', true);
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true); // https://developer.wordpress.org/reference/functions/get_template_directory_uri/ concatenated to get the proper asset folder
}

// Add a callback function to an action hook https://developer.wordpress.org/reference/functions/add_action/
// wp_enqueue_scripts hook https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
add_action('wp_enqueue_scripts','assets');


function sidebar(){
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id'   => 'footer',
            'description' => 'Zona de Widgets para pie de página',
            'before_title' => '<p>',
            'after_title'  => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
        )
        );
}

// Add a callback function to an action hook https://developer.wordpress.org/reference/functions/add_action/
// widgets_init hook https://developer.wordpress.org/reference/hooks/widgets_init/
add_action('widgets_init', 'sidebar');

function productos_type(){
    $labels = array(
        'name' => 'Productos',
        'singular_name' => 'Producto',
        'manu_name' => 'Productos',
    );

    $args = array(
        'label'  => 'Productos', 
        'description' => 'Productos de Platzi',
        'labels'       => $labels,
        'supports'   => array('title','editor','thumbnail', 'revisions'),
        'public'    => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-cart',
        'can_export' => true,
        'publicly_queryable' => true,
        'rewrite'       => true,
        'show_in_rest' => true

    );    
    register_post_type('producto', $args);
}

// Add a callback function to an action hook https://developer.wordpress.org/reference/functions/add_action/
// init hook https://developer.wordpress.org/reference/hooks/init/
add_action('init', 'productos_type');