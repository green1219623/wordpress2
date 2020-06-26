<?php get_header(); ?>

<?php get_template_part('template-parts/top-img'); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="cast-page">
    <div class="wow fadeIn">
        <div class="h2-wrap-cast">
        <h2><?php echo get_the_title() ?></h2>
        </div><!-- h2-wrap -->

        <div class="cast-wrap-wrap">
            <div class="cast-bg">
                <div class="inner">

                
                    <div class="cast-flex">
                        <?php
                        $cast = SCF::get('cast', 48);
                        foreach ($cast as $field_name => $field_value) {
                            $castImages = wp_get_attachment_image_src($field_value['cast-img'], 'full');
                            $castCounter++; $count++; ?>


                            <?php if ($castCounter <= 3) : ?>
                                
                                <div class="cast-wrap">
                                    <img src="<?php echo $castImages[0]; ?>" alt="" class="cast-img">
                                    <div class="cast-text-wrap">
                                        <h3><?php echo esc_html($field_value['cast-position']); ?> <br><?php echo esc_html($field_value['cast-name']); ?> </h3>
                                        <p><?php echo esc_html($field_value['cast-text']); ?></p>
                                    </div>
                                </div><!-- cast-wrap -->

                                <?php if ($count == 3) {
                                    echo '</div><!-- cast-flex -->
            </div><!-- inner -->
        </div><!-- cast-bg -->
    </div><!-- cast-wrap-wrap -->
    </div>
    <div class="wow fadeIn">
    <div class="inner">
    <div class="cast-medium-wrap">' ;
}?>

                          
                            
                                <?php elseif ($castCounter <= 7) : ?>
                                    <div class="cast-medium">
                                        <div class="cast-medium-img"><img src="<?php echo $castImages[0]; ?>" alt="" class="cast-img"></div>
                                        <div class="cast-medium-text-wrap">
                                            <div class="cast-medium-name">
                                                <p><?php echo esc_html($field_value['cast-position']); ?><br>
                                                    <span><?php echo esc_html($field_value['cast-name']); ?></span></p>
                                            </div><!-- cast-medium-name -->
                                            <div class="cast-medium-detail">
                                                <p></p>
                                            </div><!-- cast-medium-detail -->
                                            <div class="cast-medium-text">
                                                <p><?php echo esc_html($field_value['cast-text']); ?></p>
                                            </div><!-- cast-medium-text -->
                                        </div><!-- cast-medium-text-wrap -->
                                    </div>
                                    <!--cast-medium  -->

                                    <?php if ($count == 7) {
                                    echo '
                                    </div><!-- cast-medium-wrap -->
                        </div><!-- inner -->
                    </div>
    
                    <div class="wow fadeIn">
                        <div class="cast-small-bg">
                            <div class="inner">
                                <div class="cast-small-wrap">' ;
}?>
                            <?php elseif ($castCounter >= 8) : ?>
                                <div class="cast-small">
                                    <div class="cast-small-name">
                                        <div class="cast-medium-name">
                                            <p><?php echo esc_html($field_value['cast-position']); ?> <br>
                                                <span><?php echo esc_html($field_value['cast-name']); ?></span></p>
                                        </div><!-- cast-medium-name -->
                                        <div class="cast-medium-detail">
                                            <p></p>
                                        </div><!-- cast-medium-detail -->
                                    </div>
                                </div><!-- cast-small -->

                            <?php endif;?>

                        <?php } ?>

                            </div><!-- cast-small-wrap -->
                        </div><!-- inner -->
                    </div><!-- cast-small-bg -->
                </div>
</section><!-- cast -->

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>