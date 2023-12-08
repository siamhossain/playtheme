
<?php 

/*
    Archive template
*/

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
                <div class="archive-area">
                    <h2 class="title">Archive Page</h2>
                    <?php the_archive_title('<h3 class="title">', '</h3>') ?>
                    <?php the_archive_description( '<div class="taxonomy-description">','siam' ,'</div>') ?>
                </div>
                <!-- <h1>  -->
                    <?php /* echo get_theme_mod('play_header_logo') */ ?> 
                <!-- </h1> -->
            </div>
        </div>

        <section class="blog-post-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <?php get_template_part('template-parts/blog-setup') ?>
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

