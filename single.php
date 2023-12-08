
<?php 
require_once FINBUZZ_INC_DIR.'/helper-functions.php';

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

        <div class="test">
            <div class="container">
                <h1>Single Post</h1>
                <h1><?php echo get_theme_mod('play_header_logo') ?></h1>
            </div>
        </div>
        <!-- <h1>Test page</h1> -->

        <section class="blog-post-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php get_template_part('template-parts/post-setup') ?>
                        <?php comments_template(); ?>
                        <h1>dfgsdfgsfgsfdg</h1>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar-wrapper">
                            <?php get_sidebar() ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
    
    <?php get_footer() ?>
</html>

