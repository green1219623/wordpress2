<!-- schedule -->
<div class="wow fadeIn">
    <section class="schedule">
        <div class="inner">
            <div class="schedule-wrap">
                <div class="h2-wrap-schedule">
                    <h2>SCHEDULE</h2>
                </div><!-- h2-wrap -->

                <div class="schedule-text">
                    <div class="schedule-text-wrap">
                        <?php
                        $group_set = SCF::get('schedule', 40);
                        foreach ($group_set as $field_name => $field_value) {
                        ?>
                            <p> <?php echo esc_html($field_value['repeat-schedule']); ?></p>
                            <a href="<?php echo esc_html($field_value['repeat-link']); ?>" class="under-line"><?php echo esc_html($field_value['repeat-link-text']); ?></a>

                        <?php } ?>

                    </div><!-- scedule-text-wrap -->
                </div><!-- schedule-text -->

            </div><!-- schedule-wrap -->
            <div class="scedule-btn-wrap">
                <div class="cast-contact-btn">
                    <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせはこちら</a>
                </div><!-- cast-contact-btn -->
                <div class="cast-book-btn">
                    <a href="">チケット予約サイトへ</a>
                </div><!-- cast-book-btn -->
            </div><!-- scedule-btn-wrap -->
        </div><!-- inner -->
    </section><!-- scedule -->
</div>