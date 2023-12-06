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
                <h1><?php echo get_theme_mod('play_header_logo') ?></h1>
                <?php
                    // $price = get_post_meta(get_the_ID(), 'Price', true);
                ?>
            </div>
        </div>

        <section class="blog-post-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php
                            if( have_posts() ):
                                while( have_posts() ): the_post(); ?>
                                    <div class="blog-post">
                                        <h2 class="title">
                                            <a href="<?php the_permalink()?>">
                                                <?php the_post_thumbnail(); ?>
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                        <div class="post-content">
                                            <small>posted on: <?php the_time('F j, Y');?> at <?php the_time('g:i a' );?> , in <?php the_category(); ?> </small>
                                            <?php the_excerpt( ) ?>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;
                        ?>    
                        <!-- pagination -->
                        <?php FinbuzzTheme_Helper::pagination(); ?>
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

