<?php get_header(); ?>

<?php get_template_part('template-parts/top-img'); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- news-news -->
<section class="page-comment">
    <div class="wow fadeIn">
        <div class="inner">
            <div class="h2-wrap-comment">
            <h2><?php echo get_the_title() ?></h2>
                <p>舞台関係者のみならず<br class="sp">各界著名人からコメントが届いています！</p>
            </div><!-- h2-wrap -->
            <div class="page-comment-wrap">

                <div class="comment-img">
                    <div class="comment-text-wrap">
                        <p class="comment-name">京都佛立ミュージアム館長 <span>長松清潤</span></p>
                        <p class="comment-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                    </div><!-- comment-text -->
                </div><!-- comment-img -->

                <div class="comment-card-wrap">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/comment.png" alt="" class="comment-card-img">
                    <div class="comment-card-text-wrap">
                        <p class="comment-card-name">京都佛立ミュージアム館長 <br> <span>長松清潤</span></p>
                        <p class="comment-card-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                    </div><!-- comment-card-text-wrap -->
                </div><!-- comment-card-wrap -->

                <div class="wow fadeIn">
                    <div class="page-comment-text-wrap">
                        <div class="page-comment-flex">

                            <?php
                            $group_set = SCF::get('comments', 91);
                            foreach ($group_set as $field_name => $field_value) {
                            ?>

                                <div class="page-comment-card">
                                    <p class="page-comment-name"><?php echo esc_html($field_value['comments-name']); ?></p>
                                    <p class="page-comment-detail"><?php echo esc_html($field_value['comments-position']); ?></p>
                                    <p class="page-comment-text"><?php echo esc_html($field_value['comments-text']); ?></p>
                                </div>

                                <?php } ?>
                        </div><!-- page-comment-flex -->
                    </div><!-- page-comment-text-wrap -->
                </div><!-- page-comment-wrap -->
    
            </div><!-- inner -->
        </div>
    </div>
</section> <!-- news -->

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>