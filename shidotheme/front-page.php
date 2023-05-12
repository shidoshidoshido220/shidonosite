<?php
/*~~~~~~~~~~~~~~~~~~~~~~~~~~
Theme Name : shidonotheme
~~~~~~~~~~~~~~~~~~~~~~~~~~*/
//TOPページ

get_header();
?>


<div class="contents">
    <h1 class="fadein01">志戸のフロントエンド</h1>
    <div class="content01 fadein02">
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


    <h2 class="fadein01">基本の言語</h2>
    <div class="content02">
    <a href="<?php echo home_url(); ?>/HTML.html">
        <div class="item fadein02">            
                <h3>HTML</h3>
                <div class="icon">
                    <i class="fa-solid fa-code icon-size"></i>
                </div>
                <div class="desc">よろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いします</div>
           
        </div>
        </a>
        <a href="<?php echo home_url(); ?>/CSS.html">
        <div class="item fadein02">
            
                <h3>CSS</h3>
                <div class="icon">
                    <i class="fa-brands fa-css3 icon-size"></i>
                </div>
                <div class="desc">よろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いします</div>
            </div>
            </a>
            <a href="<?php echo home_url(); ?>/Javascript.html">
        <div class="item fadein02">
            
                <h3>Javascript</h3>
                <div class="icon">
                    <i class="fa-brands fa-js icon-size"></i>
                </div>
                <div class="desc">よろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いしますよろしくお願いします</div>
            
        </div>
        </a>
    </div>
    <h2 class="fadein01">お問い合わせ</h2>
    <div class="content03 fadein03">
        <div class="contactform">
            <?php echo do_shortcode('[contact-form-7 id="10" title="コンタクトフォーム 1"]'); ?>
        </div>
    </div>
    </div>
</div>
</div>
</main>

<?php get_footer(); ?>