<?php get_header(); ?>

<?php get_template_part('template-parts/top-img'); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- news-news -->
<section class="news-news">
    <div class="wow fadeIn">
        <div class="inner">
            <div class="news-title-wrap">
                <div class="h2-wrap-news">
                    <h2><?php echo get_the_archive_title() ?></h2>
                </div><!-- h2-wrap -->
            </div>
            <!--news-title-wrap -->


            <?php
            if (have_posts()) : ?>

                <!-- entries -->
                <div class="news-card-wrap">
                    <?php
                    while (have_posts()) :
                        the_post(); ?>
                           

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

                    <?php
                    endwhile;
                    ?>
                <?php endif; ?>
               
                 
            </div><!-- news-card-wrap -->
        </div><!-- inner -->
    </div>
</section> <!-- news -->

<?php get_template_part('template-parts/pagenation'); ?>

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>