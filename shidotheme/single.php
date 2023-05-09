<?php
/*~~~~~~~~~~~~~~~~~~~~~~~~~~
Theme Name : shidonotheme
~~~~~~~~~~~~~~~~~~~~~~~~~~*/
//ブログの投稿ページ

get_header();
?>
    <div class="blog_wrapper">
        <div class="blog_inner">
            <div class="blog_box">
                <div class="article">
                    <div class="thumbnail">
                        <?php echo get_the_post_thumbnail(); ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <?php if(have_posts()): while(have_posts()): the_post();?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <?php echo get_template_part('include/sidebar'); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>