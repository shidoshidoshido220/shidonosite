<?php
/*~~~~~~~~~~~~~~~~~~~~~~~~~~
Theme Name : shidonotheme
~~~~~~~~~~~~~~~~~~~~~~~~~~*/
//ブログ投稿の一覧ページ


get_header();
?>
<div class="list_wrapper">
    <div class="list_inner ">
        <div class="list_box">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 10,
                'paged' => $paged,
                'order' => 'ASC',
                'orderby' => 'date',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="list_content">
                <a href="<?php the_permalink(); ?>">
                    <div class="blog_thumbnail"><?php echo get_the_post_thumbnail(); ?></div>
                    <div class="blog_date"><?php the_time('Y,m,d'); ?></div>
                    <div class="blog_title"><?php the_title(); ?></div>    
                </a>            
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
</main>

<?php get_footer(); ?>