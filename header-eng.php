<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <!--ToTop-->
    <button class="toTop" onclick="topFunction()" id="toTop"></button>
    <!--End ToTop-->

    <div class="mainmenu animated fadeInDown" id="mainmenu">
        <div class="container">
            <div class="row navigation">
                <a href="/" class="main_logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt="" class="main_logo_img">
                </a>
                <ul class="header_menu" id="header_menu">
                    <a href="javascript:void(0)" class="closebtn" onclick="closePhone()">&times;</a>
                    <li><a href="/" class="header_menu_link">Dom</a></li>
                    <li><a href="/uslugi" class="header_menu_link">Services</a></li>
                    <li><a href="/karty-upomnikowe" class="header_menu_link">Gift cards</a></li>
                    <li><a href="/galeria" class="header_menu_link">Gallery</a></li>
                    <li><a href="/kontakty" class="header_menu_link">Contacts</a></li>
                    <li><a href="/rezerwacja" class="header_menu_link">Appointment</a></li>
                </ul>
                <div class="conts">
                    <div class="phone">
                        <p class="phone_number">
							<?php the_field('telefon_1', 24); ?>
						</p>
                        <button class="recall" data-toggle="modal" data-target="#recall">Ask for a call back</button>
                    </div>
                    <ul class="languages">
                        <li><a href="#" class="lang active">PL</a></li>
                        <li class="bet">|</li>
                        <li><a href="#" class="lang">EN</a></li>
                    </ul>
                </div>
                <div class="buttons">
                    <button class="phone_btn" onclick="openPhone()">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/mobiphone.png" alt="" class="hamburger_img">
                    </button>
                    <ul class="languages_mobile">
                        <li><a href="#" class="lang active">PL</a></li>
                        <li class="bet">|</li>
                        <li><a href="#" class="lang">EN</a></li>
                    </ul>
                    <button class="hamburger" onclick="openNav()">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/hamburger.png" alt="" class="hamburger_img">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <ul class="header_menu_mobile" id="header_menu_mobile">
        <li class="menu_header">
            <img src="<?php echo bloginfo('template_url'); ?>/images/mobi_logo.png" alt="" class="menu_header_logo">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </li>
        <li><a href="/" class="header_menu_link">Dom</a></li>
        <li><a href="/uslugi" class="header_menu_link">Services</a></li>
        <li><a href="/karty-upomnikowe" class="header_menu_link">Gift cards</a></li>
        <li><a href="/galeria" class="header_menu_link">Gallery</a></li>
        <li><a href="/kontakty" class="header_menu_link">Contacts</a></li>
        <li><a href="/rezerwacja" class="header_menu_link">Appointment</a></li>
    </ul>

    <ul class="phone_mobile" id="phone_mobile">
        <li class="menu_header">
            <img src="<?php echo bloginfo('template_url'); ?>/images/mobi_logo.png" alt="" class="menu_header_logo">
            <a href="javascript:void(0)" class="closebtn" onclick="closePhone()">&times;</a>
        </li>
        <li class="phones_block">
            <p class="phone_number"><?php the_field('telefin_1', 24); ?></p>
            <button class="recall" data-toggle="modal" data-target="#recall">Ask for a call back</button>
        </li>
    </ul>