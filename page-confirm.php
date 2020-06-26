<?php get_header(); ?>

<?php get_template_part('template-parts/top-img'); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="confirm-page">
    <div class="wow fadeIn">
        <div class="h2-wrap-cast">
            <h2>CONFIRM</h2>
        </div><!-- h2-wrap -->
        <div class="inner">
            <div class="inquiry-wrap">
                <div class="confirm-text">
                    <p>お問い合わせありがとうございました。<br>
                        メッセージは正常に送信されました。</p>
                </div>
            </div><!-- inquiry-wrap -->
        </div><!-- inner -->
    </div>
</section><!-- cast -->

<section class="news">
    <div class="wow fadeIn">
        <div class="inner">
            <div class="news-title-wrap">
                <div class="h2-wrap-news">
                    <h2>LATEST NEWS</h2>
                </div><!-- h2-wrap -->
                <div class="news-btn">
                    <a href="<?php echo home_url('/news'); ?>">ニュース一覧へ</a>
                </div><!-- btn -->
            </div>
            <!--news-title-wrap -->
            <?php
            if (have_posts()) : ?>

                <!-- entries -->
                <div class="news-card-wrap">

                    <?php
                    $args = array(/* 配列に複数の引数を追加 */
                        'post_type' => 'NEWS', /* 投稿タイプを指定 */
                        'posts_per_page' => 5, /* 表示するページ数 */
                    ); ?>
                    <?php query_posts( $args ); ?>
                    <?php
                    while (have_posts()) :
                        the_post();
                        $counter++; ?>
                        <?php if ($counter <= 3) : ?>


                            <!-- entry-item -->
                            <a href="<?php the_permalink(); ?>" class="news-card">
                                <?php
                                if (has_post_thumbnail()) {
                                    // アイキャッチ画像が設定されてれば大サイズで表示
                                    the_post_thumbnail('large');
                                } else {
                                    // なければnoimage画像をデフォルトで表示
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                }
                                ?>
                                <div class="news-card-text-wrap">
                                    <time class="news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                    <p class="news-title"><?php echo mb_substr($post->post_title, 0, 17) . '...'; //タイトルを表示 
                                                            ?></p><!-- /entry-item-title -->
                                </div><!-- news-card-text-wrap -->
                            </a><!-- news-card -->

                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="news-small">
                                <?php
                                if (has_post_thumbnail()) {
                                    // アイキャッチ画像が設定されてれば大サイズで表示
                                    the_post_thumbnail('large');
                                } else {
                                    // なければnoimage画像をデフォルトで表示
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                                }
                                ?>
                                <div class="small-card-text-wrap">
                                    <time class="news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                    <p class="news-title"><?php echo mb_substr($post->post_title, 0, 17) . '...'; //タイトルを表示 
                                                            ?></p><!-- /entry-item-title -->

                                </div><!-- small-card-text-wrap -->
                            </a><!-- news-card -->

                        <?php endif; ?>
                    <?php
                    endwhile;
                    ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
                </div><!-- /entries -->


                <div class="news-btn-sp">
                    <a href="<?php echo home_url('/news'); ?>">ニュース一覧へ</a>
                </div><!-- btn -->
        </div><!-- small-news-wrap -->

    </div><!-- inner -->
    </div>
</section> <!-- news -->

<?php get_template_part('template-parts/schedule'); ?>

    <?php get_footer(); ?>

