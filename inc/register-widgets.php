<?php 



function play_widgets_register($name, $id, $description, $before_widget, $after_widget, $before_title, $after_title) {
    register_sidebar(array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $before_widget,
        'after_widget' => $after_widget,
        'before_title' => $before_title,
        'after_title' => $after_title,
    ));
}

function multiple_widget_init() {
    play_widgets_register( 
        __('Main Sidebar', 'playtheme'),
        'sidebar-1',
        __('Widgets in this area will be shown on all posts and pages.', 'playtheme'), 
        '<div id="%1$s" class="child_sidebar widget %2$s">',
        '</div>',
        '<h2 class="title">',
        '</h2>',
    );
    
    play_widgets_register( 
        __('Footer 1', 'playtheme'),
        'footer-1',
        __('Widgets in this area will be shown on all posts and pages.', 'playtheme'), 
        '<div class="child_sidebar">',
        '</div>',
        '<h2 class="title">',
        '</h2>',
    );
    play_widgets_register( 
        __('Footer 2', 'playtheme'),
        'footer-2',
        __('Widgets in this area will be shown on all posts and pages.', 'playtheme'), 
        '<div class="child_sidebar">',
        '</div>',
        '<h2 class="title">',
        '</h2>',
    );
    play_widgets_register( 
        __('Footer 3', 'playtheme'),
        'footer-3',
        __('Widgets in this area will be shown on all posts and pages.', 'playtheme'), 
        '<div class="child_sidebar">',
        '</div>',
        '<h2 class="title">',
        '</h2>',
    );
}

add_action('widgets_init', 'multiple_widget_init');