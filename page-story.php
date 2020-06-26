<?php get_header(); ?>

<!-- page-story -->
<section class="page-story">
    <div class="story-1">
        <div class="wow fadeIn">
            <div class="top-inner">
                <div class="top-img-flex">
                    <div class="story-top-title">
                        <p>世界最長の叙事詩を<br class="sp">ピーター・ブルック以来の全編舞台化</p>
                        <h1>完全版<br class="sp">マハーバーラタ</h1>
                    </div><!-- story-top-title -->
                    <div class="story-top-date">
                        <p>2020年7月4日～7日 <br>
                            なかのZERO大ホール</p>
                    </div><!-- story-top-date -->
                </div><!-- top-img-flex -->
                <div class="story-page-btn">
                    <a href="">チケット予約サイトへ</a>
                </div><!-- btn -->

                <!-- breadcrumb -->
                <div class="breadcrumb-story">
                    <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
                    ?>
                </div><!-- /breadcrumb -->


                <div class="story-page-wrap">
                    <div class="h2-story-page">
                      <h2><?php echo get_the_title() ?></h2>
                    </div><!-- h2-wrap -->
                </div><!-- news-title-wrap -->

                <?php
                        $stories = SCF::get('story', 85);
                        foreach ($stories as $field_name => $field_value) {
                        ?>
                            
                <div class="story-1-text">
                    <p> <?php echo esc_html($field_value['story1']); ?> </p>
                </div>
            </div><!-- top-inner -->
        </div>
    </div><!-- story-1 -->

    <div class="story-2-wrap">
        <div class="wow fadeIn">
            <div class="story-2-img"></div>
            <div class="story-2-text">
            <p> <?php echo esc_html($field_value['story2']); ?> </p>
            </div><!-- story-2-text -->
        </div>
    </div><!-- story-2 -->

    <div class="story-3-wrap">
        <div class="wow fadeIn">
            <div class="story-3-img"></div>
            <div class="story-3-text">
            <p> <?php echo esc_html($field_value['story3']); ?> </p>
            </div><!-- story-3 -->
        </div>
    </div><!-- story-3-wrap -->

    <div class="story-4-wrap">
        <div class="wow fadeIn">
            <div class="story-4-img"></div>
            <div class="story-4-text">
            <p> <?php echo esc_html($field_value['story4']); ?> </p>
            </div><!-- story-4 -->
        </div>
    </div><!-- story-4-wrap -->
    <?php } ?>
</section> <!-- story-page -->

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>