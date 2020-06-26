<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 検索時の説明 -->
    <meta name="description" content="小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！
    アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
    ">
    <!-- ファビコン -->
    <!-- HPタイトル -->
    <title>完全版マハーバーラタ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- twitter カード -->
    <meta name="twitter:card" content="summary_large_image" />
    <!--①-->
    <meta name="twitter:site" content="@moepinthai" />
    <!--②-->
    <meta property="og:url" content="https://test-site.moepinthai.com/" />
    <!--③-->
    <meta property="og:title" content="完全版マハーバーラタ" />
    <!--④-->
    <meta property="og:description" content="コーディング勉強のための模写サイトです" />
    <!--⑤-->
    <meta property="og:image" content="https://test-site.moepinthai.com/wp-content/uploads/2020/06/news3.png" />
    <!--⑥-->
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrap">

        <header>
            <div class="header-wrap">
                <!-- header-nav -->

                <?php
                wp_nav_menu(
                    //.header-listを置き換えて、PC用メニューを動的に表示する
                    array(
                        'depth' => 1,
                        'theme_location' => 'global', //グローバルメニューをここに表示すると指定
                        'container' => 'false',
                        'menu_class' => 'header-list',

                    )
                );
                ?>

            </div><!-- header-wrap -->
        </header>

        <!-- drawer -->
        <a class="menu">
            <span class="menu__line menu__line--top"></span>
            <span class="menu__line menu__line--center"></span>
            <span class="menu__line menu__line--bottom"></span>
        </a>
        <nav class="gnav">
            <div class="gnav__wrap">
                <?php
                //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
                        'container' => 'nav',
                        'container_class' => 'drawer-nav',
                        'menu_class' => 'drawer-list',
                    )
                );
                ?>
            </div>
            <!--gnav-wrap-->
        </nav>