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
                    <?php the_content()?>
                </div>
            </div>
        <?php endwhile;
    endif;
?>    
