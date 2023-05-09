<?php
//サイドバー
?>

<div class="sidebar">
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
    <ul>
        <li><a href="<?php the_permalink(); ?>">
                <div class="blog_date"><?php the_time('Y年m月d日'); ?></div>
                <div class="blog_title"><?php the_title(); ?></div>
            </a>
        </li>
    </ul>
    <?php endwhile; endif; ?>
</div>