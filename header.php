
<?php
/*
 * Template Name: DIATheme
 * Description: A simple WordPress template with language support and single post page.
 * Author: Arthur Mkrtchian
 * Author URI: Your Website
 * Version: 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="page-wrapper">
        <header id="header">
            <div class="language-change">
                <?php
                // Display language switcher
                if (function_exists('pll_the_languages')) {
                    pll_the_languages(
                        array(
                            'show_flags' => true,
                            // Display language flags
                            'show_names' => false,
                            // Display language names
                        )
                    );
                }
                ?>
            </div>
            <div class="header__container">
                <div class="logo">
                    <?php if (function_exists("the_custom_logo")) {
                        the_custom_logo();
                    } ?>
                </div>
                <nav class="header_nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'main_en',
                            'menu_class' => 'menu',
                        )
                    );
                    ?>
                </nav>
            </div>
    </div>
    <div class="main-menu-expand">
        <div class="menu-container">
            <div class="main-menu-expand-control">
                <img src="img/logo.svg" alt="Logo" class="main-menu_logo">
                <svg class="close-button">
                    <use class="close-btn" href="img/close.svg#close"></use>
                </svg>
            </div>
        </div>
        <div class="menu-container">
            <div class="main-menu__column">

                <a href="#" class="main-menu__column-heading">News</a>
                <div class="main-menu__column-heading">About Region</div>
                <a href="#" class="main-menu__item">Investment Guide</a>
                <a href="#" class="main-menu__item">Presentation of the Region</a>
                <a href="#" class="main-menu__item">Investment and foreign trade activities</a>
                <a href="#" class="main-menu__item">Construction. Sectoral Review</a>
                <a href="#" class="main-menu__item">Labour Market</a>
                <a href="#" class="main-menu__item">Infrastructure and loistics</a>
            </div>
            <div class="main-menu__column">
                <div class="main-menu__column-heading">Doing Business</div>
                <a href="#" class="main-menu__item">Establishing a company</a>
                <a href="#" class="main-menu__item">Services for Business</a>
                <a href="#" class="main-menu__item">Legal fraemwork</a>
                <a href="#" class="main-menu__item">Financing a business</a>
                <a href="#" class="main-menu__item">Preferances for investors</a>

                <div class="main-menu__column-heading">Investment Opportunities</div>
                <a href="#" class="main-menu__item">Investment profiles of territorial communities</a>
                <a href="#" class="main-menu__item">Investment Projects</a>
            </div>
            <div class="main-menu__column">
                <div class="main-menu__column-heading">Digital tools</div>
                <a href="#" class="main-menu__item">DIABASE. Regional enterprices</a>
                <a href="#" class="main-menu__item">DIAGRAM. Open indicators</a>
                <a href="#" class="main-menu__item">DIAMAP. Interactive tool</a>

                <div class="main-menu__column-heading">About Agency</div>
                <a href="#" class="main-menu__item">About DIA</a>
                <a href="#" class="main-menu__item">Contacts</a>
            </div>
        </div>
    </div>
    </header>