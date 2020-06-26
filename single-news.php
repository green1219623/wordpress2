<?php get_header(); ?>

<?php get_template_part('template-parts/top-img'); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<!-- news-news -->
<section class="news-news">
    <div class="wow fadeIn">
        <div class="inner">
            <div class="news-title-wrap">
                <div class="h2-wrap-news">
                    <h2>NEWS</h2>
                </div><!-- h2-wrap -->
            </div><!-- news-title-wrap -->

            <div class="page-wrap">
                <div class="page-img">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }
                    ?>
                </div><!-- page-img -->
                <div class="page-title">
                    <p><time class="entry-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                        <h2><?php the_title(); ?></h2>

                    </p>
                </div><!-- page-title -->
                <div class="page-content">
                    <?php
                    //本文の表示
                    $this_content = wpautop($post->post_content);
                    echo $this_content; ?>

                </div><!-- page-content -->
            </div><!-- page-wrap -->

            <div class="link-page">
                

                <?php if (get_previous_post()) : ?>

                    <?php
                    $prev_post = get_previous_post();
                    if (!empty($prev_post)) {
                        $prev_url = get_permalink($prev_post->ID);
                    }

    
    
                    ?>
                    
                    <div class="previous-page">
                        <a href="<?php echo $prev_url ?>" class="link-circle-previous"><i class="fas fa-chevron-left"></i></a><!-- previous-wrap -->
                        <div class="link-text-wrap">
                        <p class="link-date"><?php previous_post_link('%link', '%date'); ?></p>
                            <p class="link-title"><?php previous_post_link('%link', '%title'); ?></p>
                        </div><!-- link-text-wrap -->
                    </div><!-- previous-page -->
                <?php endif; ?>

                <?php if (get_next_post()) : ?>

                    <?php
                    $next_post = get_next_post();
                    if (!empty($next_post)) {
                        $next_url = get_permalink($next_post->ID);
                    }
                    ?>
                    <div class="next-page">
                        <div class="link-text-wrap">
                            <p class="link-date"><?php next_post_link('%link', '%date'); ?></p>
                            <p class="link-title"><?php next_post_link('%link', '%title'); ?></p>
                        </div><!-- link-text-wrap -->
                        <a href="<?php echo $next_url?>" class="link-circle-next"><i class="fas fa-chevron-right"></i></a><!-- previous-wrap -->
                    </div><!-- next-page -->
                <?php endif; ?>

            </div>

        </div><!-- inner -->
    </div>
</section> <!-- news -->

<?php get_template_part('template-parts/schedule'); ?>

    <?php get_footer(); ?>