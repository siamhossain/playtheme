<?php


// require_once 'inc/scripts.php';



// DIR
define( 'FINBUZZ_BASE_DIR',    get_template_directory(). '/' );
define( 'FINBUZZ_INC_DIR',     FINBUZZ_BASE_DIR . 'inc/' );
define( 'FINBUZZ_VIEW_DIR',    FINBUZZ_INC_DIR . 'views/' );


//URL
require_once  FINBUZZ_INC_DIR . 'scripts.php';
require_once  FINBUZZ_INC_DIR . 'register-widgets.php';



//Theme Setup 

//title-tag
add_theme_support('title-tag');
//post-thumbnail
add_theme_support( 'post-thumbnails' );
//permalink
apply_filters( 'the_permalink', 1);


//excerpt

function play_excerpt_more ($more) {
    global $post;
    return '<br> <br> <a class="read-more" href="' . get_permalink($post->id) . '">Read More</a>';
}

add_filter('excerpt_more', 'play_excerpt_more');

function play_excerpt_length ( $length ) {
    return 40;
}

add_filter('excerpt_length', 'play_excerpt_length');




//customize register
function play_customiaze_register ($wp_customize) {
    $wp_customize->add_section('play_header_area', array(
        'title' => __('Header areaX', 'playtheme'),
        'description' => esc_html__( 'you can update header area here', 'playtheme' ),
    ));

    $wp_customize->add_setting('play_header_logo', array(
        'default' => 'Heading Text'
    ));

    $wp_customize->add_control('play_header_logo', array (
        'label' => __('TestX'),
        'section' => 'play_header_area',
        'description' => esc_html__( 'you can update header logo here', 'playtheme' ),
    ));


    //backgroun Color
    $wp_customize->add_section('play_bg_color', array(
        'title' => __('Background Color', 'playtheme'),
        'description' => esc_html__( 'you can update background color here', 'playtheme' ),
    ));

    $wp_customize->add_setting('play_background_color', array(
        'default' => '87CEEB'
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control (
            $wp_customize,
            'color',
            array(
                'label'      => __( 'Update Color', 'theme_name' ),
                'section'    => 'play_bg_color',
                'settings'   => 'play_background_color',
                'context'    => 'your_setting_context' 
            )
        )
    );


    //image customize
    $wp_customize->add_section('play_image_area', array(
        'title' => __('Image Area', 'playtheme'),
        'description' => esc_html__( 'you can update image here', 'playtheme' ),
    ));

    $wp_customize->add_setting('play_image', array(
        'default' => ''
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label'      => __( 'Upload a logo', 'theme_name' ),
                'section'    => 'play_image_area',
                'settings'   => 'play_image',
                'context'    => 'your_setting_context' 
            )
        )
    );

    //panel
    $wp_customize->add_panel( 'nd_dosth_theme_options', 
        array(
            //'priority'       => 100,
            'title'            => __( 'footer Options', 'nd_dosth' ),
            'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'nd_dosth' ),
        ) 
    );

    //panel section 1
    // Text Options Section Inside Theme
    $wp_customize->add_section( 'nd_dosth_text_options', 
        array(
            'title'         => __( 'Text Options', 'nd_dosth' ),
            'priority'      => 1,
            'panel'         => 'nd_dosth_theme_options'
        ) 
    );

    // Setting for Copyright text.
    $wp_customize->add_setting( 'nd_dosth_copyright_text',
        array(
            'default'           => __( 'All rights reserved ', 'nd_dosth' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control( 'nd_dosth_copyright_text', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'nd_dosth_text_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        ) 
    );


    //panel section 2

    // Text Options Section Inside Theme
    $wp_customize->add_section( 'nd_dosth_color_options', 
        array(
            'title'         => __( 'Text color', 'nd_dosth' ),
            'priority'      => 1,
            'panel'         => 'nd_dosth_theme_options'
        ) 
    );

    

    // Setting for Copyright text.
    $wp_customize->add_setting( 'nd_dosth_copyright_color',
        array(
            'default'           => __( 'All rights reserved ', 'nd_dosth' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control( 'nd_dosth_copyright_color', 
        array(
            'type'        => 'text',
            'priority'    => 10,
            'section'     => 'nd_dosth_color_options',
            'label'       => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        ) 
    );
    
}



add_action('customize_register', 'play_customiaze_register');
add_action('customize_panel_register', 'add_customizer_panels');




//Nav menu register
add_theme_support('menus');

function play_register_nav_menu() {
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'playtheme'),
        'primary_menu' => __('Primary Menu', 'playtheme'),
        'secondary_menu' => __('Secondary Menu', 'playtheme'),
    ));
}

//Pagination
// function play_pagenav () {
//     global $wp_query, $wp_rewrite;
//     $pages = ''; 
//     $max = $wp_query->max_num_pages;
//     if(!$current = get_query_var( 'paged')) $current = 1;
//     echo get_query_var( 'paged');
//     $args['base'] = str_replace(9999999999, '%#%', get_pagenum_link(9999999999));
//     $args['total'] = $max;
//     $args['current'] = $current;
//     $total = 1;
//     $args['prev_text'] = 'prev';
//     $args['prev_next'] = 'next';
//     // echo $args['prev_text'];
//     if ($max > 1) echo '</pre>
//         <div class="wp_pagenav">';
//         // if ($total == 1 && $max>1 ) $pages = '<p class="pages"> pages' .$current . '<span>of</span>' . $max . '</p>';
//         echo $pages . paginate_links($args);
//         if($max > 1) echo '</div></pre>';

        
// }
    // print_r($args[]);


add_action( 'after_setup_theme', 'play_register_nav_menu');





