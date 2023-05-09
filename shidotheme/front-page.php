<?php
/*~~~~~~~~~~~~~~~~~~~~~~~~~~
Theme Name : shidonotheme
~~~~~~~~~~~~~~~~~~~~~~~~~~*/
//TOPページ

get_header();
?>


<div class="contents">
    <h1>志戸のフロントエンド</h1>
    <div class="content01">
        <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/hawaii.jpg" alt="">
        </div>
        <div class="text">
            <div class="hl">Feature</div>
            <p>
                こんにちは。<br>フロントエンド勉強中の志戸です。<br>
                ご訪問いただきありがとうございます。<br>
                当サイトでは、サイト制作についての情報を発信していきます。
            </p>
        </div>
    </div>

    <h2>基本の言語</h2>
    <div class="content02">
        <div class="item">
            <a href="<?php echo home_url(); ?>/HTML.html">
                <h3>HTML</h3>
                <div class="icon">
                    <i class="fa-solid fa-code icon-size"></i>
                </div>
                <div class="desc">よろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いします</div>
            </a>
        </div>
        <div class="item">
            <a href="<?php echo home_url(); ?>/CSS.html">
                <h3>CSS</h3>
                <div class="icon">
                    <i class="fa-brands fa-css3 icon-size"></i>
                </div>
                <div class="desc">よろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いします</div>
            </a></div>
        <div class="item">
            <a href="<?php echo home_url(); ?>/Javascript.html">
                <h3>Javascript</h3>
                <div class="icon">
                    <i class="fa-brands fa-js icon-size"></i>
                </div>
                <div class="desc">よろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いします</div>
            </a>
        </div>
    </div>
    <h2>お問い合わせ</h2>
    <div class="content03">
        <div class="contactform">
            <?php echo do_shortcode('[contact-form-7 id="10" title="コンタクトフォーム 1"]'); ?>
        </div>
    </div>
</div>
</main>

<?php get_footer(); ?>