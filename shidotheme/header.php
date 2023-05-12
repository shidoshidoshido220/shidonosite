<!DOCTYPE html>
<html lang="ja">
<?php
/*~~~~~~~~~~~~~~~~~~~~~~~~~~
Theme Name : shidonotheme
~~~~~~~~~~~~~~~~~~~~~~~~~~*/
echo get_template_part('include/head');
?>


<body id="body">
    <header>
        <ul id="gMenu" class="PC">
            <li><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li><a href="<?php echo home_url(); ?>/html/">HTML</a></li>
            <li><a href="<?php echo home_url(); ?>/css/">CSS</a></li>
            <li><a href="<?php echo home_url(); ?>/javascript/">Javascript</a></li>
            <li><a href="<?php echo home_url(); ?>/blog/">ブログ</a></li>
            <li><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
        </ul>
        <div class="hamburger">
            <div class="hamburger_btn">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </div>
        </div>
        <div id="gMenu" class="SP">
            <ul>
                <li><a href="<?php echo home_url(); ?>">TOP</a></li>
                <li><a href="<?php echo home_url(); ?>/html/">HTML</a></li>
                <li><a href="<?php echo home_url(); ?>/css/">CSS</a></li>
                <li><a href="<?php echo home_url(); ?>/javascript/">Javascript</a></li>
                <li><a href="<?php echo home_url(); ?>/blog/">ブログ</a></li>
                <li><a href="<?php echo home_url(); ?>/contact/"></a>Contact</li>
            </ul>
        </div>
    </header>

    <a href="#pagetop" class="go_top">ページTOPへ</a>
    <main id="pagetop">
        <?php if( is_home() || is_front_page()): ?>
        <div class="slide-items">
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/main01.jpg" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/main02.jpg" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/main03.jpg" alt=""></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/main04.jpg" alt=""></div>
        </div>
        <div class="wrapper">
        <div class="inner">
        <?php elseif(is_page()): ?>
        <div class="<?php echo get_post_field( 'post_name', get_the_ID() ); ?> headimage">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="wrapper">
        <div class="inner">
            <?php echo get_template_part('include/bread'); ?>
        <?php elseif(is_archive()): ?>
        <div class="<?php echo get_post_field( 'post_name', get_the_ID() ); ?> headimage">
            <h1>ブログ</h1>
        </div>
        <div class="wrapper">
        <div class="inner">
            <?php echo get_template_part('include/bread'); ?>
        <?php endif; ?>