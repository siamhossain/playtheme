
<?php 

/*
    main template
*/

require_once FINBUZZ_INC_DIR.'/helper-functions.php';

$play_error_img = FINBUZZ_IMG_URL . '404.png';

?>

<?php get_header() ?>
    <body <?php body_class() ?> style="background: <?php echo get_theme_mod('play_background_color'); ?>" >
        <header id="header-area" class="header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <img src="<?php echo get_theme_mod('play_image') ?> " alt="">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu-area text-end">
                            <?php
                                 wp_nav_menu(   
                                    array ( 
                                        'theme_location' => 'header_menu' 
                                    ) 
                                );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="error-section">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                        <div class="error-content-wrapper d-flex flex-column justify-content-center text-center">
                            <h1 class="mb-4">404 Error Page!</h1>
                            <div class="item-img">
                                <img class="mb-4" src="<?php echo esc_url($play_error_img); ?>">
                            </div>
                            <div class="error-text-content">
                                <h3 class="mb-4">Opss! Page not found ! </h3>
                                <a href="<?php home_url() ?>" class="go-home-btn">Go To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
    
    <?php get_footer() ?>
</html>

