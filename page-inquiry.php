<?php get_header(); ?>

<?php get_template_part('template-parts/top-img'); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="inquiry-page">
    <div class="wow fadeIn">
        <div class="h2-wrap-cast">
        <h2><?php echo get_the_title() ?></h2>
        </div><!-- h2-wrap -->

        <div class="inner">
            <div class="inquiry-wrap">
                <div class="inquiry-inner">
                    <div class="inquiry-text-wrap">
                        <p>小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
                            公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
                            お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
                    </div><!-- inquiry-text-wrap -->

                    <div>
                        <?php echo do_shortcode('[contact-form-7 id="110" title="INQUIRY"]'); ?>
                    </div>
                </div><!-- schedule-wrap -->
            </div><!-- inquiry-inner -->
        </div><!-- schedule-wrap -->
    </div>
</section><!-- cast -->

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>