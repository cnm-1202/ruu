<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruu｜箕面市桜井のプライベートヘアサロン</title>

    <!-- フォント読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fontsまとめて読み込み -->
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Zen+Kaku+Gothic+New:wght@300;400;500&family=Darumadrop+One&family=Mohave:ital,wght@0,300..700;1,300..700&family=Nanum+Gothic&family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- フォントここまで -->
    <?php wp_head(); ?>
</head>

<body id="topPage">
    <!-- ヘッダーここから -->
    <header>
        <div class="header">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Ruu ロゴ" class="header__logoImg"></a><img src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" id="menuBtn" alt="メニュー" class="header__menuImg">

    <!-- メニュー -->
        <div id="overlay" class="overlay"></div>
        <nav id="jsNav" class="jsNav">
            <img src="<?php echo get_template_directory_uri(); ?>/img/closeBtn.svg" id="closeBtn" alt="メニューを閉じる" class="jsNav__closeBtn">
            <ul class="jsNav__menu">
                <li class="jsNav__list"><a href="#top">TOP</a></li>
                <li class="jsNav__list"><a href="#concept">CONCEPT</a></li>
                <li class="jsNav__list"><a href="#profile">PROFILE</a></li>
                <li class="jsNav__list"><a href="#menu">MENU</a></li>
                <li class="jsNav__list"><a href="#features">FEATURES</a></li>
                <li class="jsNav__list"><a href="#news">NEWS</a></li>
                <li class="jsNav__list"><a href="https://beauty.hotpepper.jp/slnH000705260/" target="_blank" rel="noopener noreferrer">RESERVATION</a></li>
            </ul>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Ruu ロゴ" class="jsNav__logo"></a>
        </nav>
        </div>
    <!-- メニューここまで -->
    </header>

    <!-- ヘッダーここまで -->