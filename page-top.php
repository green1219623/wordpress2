<?php get_header(); ?>
<!-- hero-area -->
<div class="wow fadeIn">
    <section class="hero">
        <div class="hero-img">
            <div class="hero-title-wrap">
                <p class="hero-sub-title">世界最長の叙事詩を<br class="sp">ピーター・ブルック以来の全編舞台化</p>
                <h1 class="hero-title">完全版<br class="sp">マハーバーラタ</h1>
            </div><!-- hero-title-wrap -->
            <div class="hero-text-wrap">
                <div class="hero-date">
                    <p>2020年7月4日～7日 <br>
                        なかのZERO大ホール
                    </p>
                </div><!-- hero-date -->
                <div class="hero-detail">
                    <p>小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
                        <br>
                        アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
                </div>
                <div class="top-btn">
                    <a href="">チケット予約サイトへ</a>
                </div><!-- btn -->
            </div><!-- hero-text-wrap -->
        </div><!-- hero-img -->
    </section><!-- hero -->
</div>

<!-- introduction -->
<div class="wow fadeIn">
    <section class="introduction">
        <div class="inner">
            <div class="introduction-wrap">
                <div class="h2-wrap">
                    <h2>INTRODUCTION</h2>
                    <h3>なぜ今「マハーバーラタ」なのか？</h3>
                </div><!-- h2-wrap -->
                <div class="introduction-text-wrap">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/IMG_4656.PNG" alt="" class="introduction-img">
                    <div class="introduction-text">
                        <p>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？
                            <br>
                            それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。
                            平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>
                    </div><!-- introduction-text -->
                    <div class="introduction-text">
                        <p>現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
                            神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
                            非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>
                    </div><!-- introduction-text -->
                </div><!-- introduction-text-wrap -->
            </div><!-- introduction-wrap -->
        </div><!-- inner -->
    </section><!-- introduction -->
</div>

<!-- news -->
<div class="wow fadeIn">
    <section class="news">
        <div class="inner">
            <div class="news-title-wrap">
                <div class="h2-wrap-news">
                    <h2>NEWS</h2>
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
</section> <!-- news -->
</div><!-- wow -->

<!-- story -->
<div class="wow fadeIn">
    <section class="story">
        <div class="h2-wrap-story">
            <h2>STORY</h2>
        </div><!-- h2-wrap -->
        <div class="inner">
            <div class="story-text-wrap">
                <p>マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
                    世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
                </p>
            </div><!-- story-text-wrap -->
            <div class="story-btn">
                <a href="<?php echo home_url('/story'); ?>">もっと詳しく</a>
            </div><!-- btn -->
        </div><!-- inner -->
    </section><!-- story -->
</div>

<!-- comment -->
<div class="wow fadeIn">
    <section class="comment">
        <div class="inner">
            <div class="h2-wrap-comment">
                <h2>COMMENTS</h2>
                <p>舞台関係者のみならず<br class="sp">各界著名人からコメントが届いています！</p>
            </div><!-- h2-wrap -->
            <div class="comment-img-wrap">

                <div class="comment-img">
                    <div class="comment-text-wrap">
                        <p class="comment-name">京都佛立ミュージアム館長 <span>長松清潤</span></p>
                        <p class="comment-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                    </div><!-- comment-text -->
                    <div class="comment-btn">
                        <a href="<?php echo home_url('/comment'); ?>">もっと見る</a>
                    </div><!-- btn -->
                </div><!-- comment-img -->

                <div class="comment-card-wrap">
                    <img src="<?php echo get_template_directory_uri() ?>/img/top/comment.png" alt="" class="comment-card-img">
                    <div class="comment-card-text-wrap">
                        <p class="comment-card-name">京都佛立ミュージアム館長 <br> <span>長松清潤</span></p>
                        <p class="comment-card-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                        <div class="comment-card-btn">
                            <a href="<?php echo home_url('/comment'); ?>">もっと見る</a>
                        </div><!-- btn -->
                    </div><!-- comment-card-text-wrap -->
                </div><!-- comment-card-wrap -->

            </div><!-- comment-img-wrap -->
        </div><!-- inner -->
    </section><!-- comment -->
</div>

<!-- cast -->
<div class="wow fadeIn">
    <section class="cast">
        <div class="h2-wrap-cast">
            <h2>CAST</h2>
        </div><!-- h2-wrap -->
        <div class="cast-wrap-wrap">
            <div class="cast-bg">
                <div class="inner">
                    <div class="cast-flex">

                        <?php
                        $cast = SCF::get('cast', 48);
                        foreach ($cast as $field_name => $field_value) {
                            $castImages = wp_get_attachment_image_src($field_value['cast-img'], 'full');
                            $castCounter++; ?>

                            <?php if ($castCounter <= 3) : ?>
                                <div class="cast-wrap">
                                    <img src="<?php echo $castImages[0]; ?>" alt="" class="cast-img">
                                    <div class="cast-text-wrap">
                                        <h3><?php echo esc_html($field_value['cast-position']); ?> <br>
                                            <?php echo esc_html($field_value['cast-name']); ?>
                                            <br><span><?php echo esc_html($field_value['cast-genre']); ?></span></h3>
                                        <p><?php echo esc_html($field_value['cast-text']); ?></p>
                                    </div>
                                </div><!-- cast-wrap -->

                            <?php endif ?>
                        <?php } ?>


                    </div><!-- cast-flex -->
                    <div class="cast-btn">
                        <a href="<?php echo home_url('/cast'); ?>">もっと見る</a>
                    </div><!-- btn -->
                </div><!-- cast-bg -->
            </div><!-- cast-wrap-wrap -->
        </div><!-- inner -->
    </section><!-- cast -->
</div>

<?php get_template_part('template-parts/schedule'); ?>

<?php get_footer(); ?>