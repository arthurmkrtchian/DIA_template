<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dnipropetrovsk Investment Agecny</title>
    <!-- <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="fonts/stylesheet.css"> -->
    <?php wp_head(); ?>
</head>

<body>
    <div class="page-wrapper">
        <header id="header">
            <div class="header__container">
                <div class="logo">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <nav class="header_nav">
                
                <?php /*
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'link_before' => '<span class="screen-reader-text">',
                        'link_after' => '</span>',
                    )
                ); */
                ?>
                    <ul class="main-menu">
                        <a href="#about-region">
                            <li class="main-menu__element">Region</li>
                        </a>
                        <a href="#">
                            <li class="main-menu__element">Doing business</li>
                        </a>
                        <a href="#">
                            <li class="main-menu__element">Investment projects</li>
                        </a>
                        <a href="#">
                            <li class="main-menu__element">About DIA</li>
                        </a>
                        <div class="header__nav-container-burger">HELLO</div>
                    </ul>
                    <select class="main-menu__element language-selector">
                        <option value="English" selected="selected">English</option>
                        <option value="Ukrainian">Ukrainian</option>
                        <option value="Russian">Russian</option>
                    </select>
                    <div class="main-menu-burger">
                        <span></span>
                    </div>
                    <!-- <input type="text" class="main-menu__element search" name="search" id="search"> -->
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
    <main>
        <section class="news">
        <?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();
?>
<div class="post">
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
    <?php endif; ?>
    <div class="post-content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta"><?php the_date(); ?></div>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </div>
</div>
<?php
    endwhile;
endif;
wp_reset_postdata();
?>
            <div class="container">
                <div class="main-slider">
                    <img src="img/slider.png" alt="" class="slider-img">
                </div>
                <div class="last-news__collection">
                    <a href="#" class="last-news__item">
                        <div class="last-news__item-image">
                            <img src="img/posts/train.png" alt="">
                        </div>
                        <h3 class="post-caption">Freight transportation by rail between Ukraine and Poland in 2022
                            increased...</h3>
                        <p class="post-description">In 2022, 16.9 million tons of cargo were transferred through border
                            crossings between Ukraine and Poland. This is 36.7% more compared to the previous year...
                        </p>
                    </a>
                    <a href="#" class="last-news__item">
                        <div class="last-news__item-image">
                            <img src="img/posts/industry.png" alt="">
                        </div>
                        <h3 class="post-caption">Government improves procedure for obtaining emission permits</h3>
                        <p class="post-description">In 2022, 16.9 million tons of The Cabinet of Ministers of Ukraine
                            has
                            amended the Procedure for conducting activities related to issuance of permits for...</p>
                    </a>
                    <a href="#" class="last-news__item">
                        <div class="last-news__item-image">
                            <img src="img/posts/fitch.png" alt="">
                        </div>
                        <h3 class="post-caption">Fitch Ratings has affirmed Ukraine’s Long-Term Foreign-Currency...</h3>
                        <p class="post-description">This is stated in the Fitch’s press release. «The ratings of Ukraine
                            reflect its credible macroeconomic policy framework that had lowered inflation and n...</p>
                    </a>
                    <a href="#" class="last-news__item">
                        <div class="last-news__item-image">
                            <img src="img/posts/economy.png" alt="">
                        </div>
                        <h3 class="post-caption">What will be the dynamics of the world economy in 2023</h3>
                        <p class="post-description">The war in Ukraine has already led to a slowdown in global economic
                            growth in 2022, accelerated already high global inflation, including due to rising ene...
                        </p>
                    </a>
                </div>
            </div>
        </section>
        <section class="about-region" id="about-region">
            <div class="container">
                <div class="about-region__heading">
                    <img id="region-coat" src="img/region-coat.svg" alt="Dnipropetrovsk Region Coat">
                    <h2 class="about-region__heading-text">About Dnipropetrovsk Region</h2>
                </div>
                <div class="about-region__content">
                    <p>Dnipropetrovsk region is located in the very heart of Ukraine, at the intersection of keyroad,
                        rail and water logistics routes. Powerful metallurgy and scientific research,
                        advancedtechnologies in the agricultural sector and production of organic products, metal
                        oremining and powerful titanium and ferroalloy production, as well as a developed IT sectorare
                        seamlessly combined in the region.The region forms about 10% of the entire country’s GDP, and
                        its budget is the largestamong the regions.Since the beginning of the full-scale invasion
                        launched by the Russian Federation againstUkraine in February 2022, the Dnipropetrovsk region
                        has become a hub for relocatedbusinesses, higher education, research institutions as well as IT
                        companies.</p>
                </div>
                <div class="regions-indicators">
                    <div class="region-indicators__item">
                        <div class="region-indicators__item-heading">
                            <p class="region-indicators__item-value">5.3%</p>
                            <img src="img/about-region/area.svg" alt="Area icon" class="region-indicators__item-icon">
                        </div>
                        <p class="region-indicators__item-description">of Ukraine`s</p>
                        <p class="region-indicators__item-title">area</p>
                    </div>
                    <div class="region-indicators__item">
                        <div class="region-indicators__item-heading">
                            <p class="region-indicators__item-value">7.5%</p>
                            <img src="img/about-region/chart.svg" alt="Chart icon" class="region-indicators__item-icon">
                        </div>
                        <p class="region-indicators__item-description">of Ukraine`s</p>
                        <p class="region-indicators__item-title">population</p>
                    </div>
                    <div class="region-indicators__item">
                        <div class="region-indicators__item-heading">
                            <p class="region-indicators__item-value">10%</p>
                            <img src="img/about-region/population.svg" alt="Population icon"
                                class="region-indicators__item-icon">
                        </div>
                        <p class="region-indicators__item-description">of Ukraine`s</p>
                        <p class="region-indicators__item-title">GDP</p>
                    </div>
                    <div class="region-indicators__item">
                        <div class="region-indicators__item-heading">
                            <p class="region-indicators__item-value">5.3%</p>
                            <img src="img/about-region/area.svg" alt="Area icon" class="region-indicators__item-icon">
                        </div>
                        <p class="region-indicators__item-description">of Ukraine`s</p>
                        <p class="region-indicators__item-title">area</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="digital-products">
            <div class="container">
                <div class="digital-products__heading">
                    <div class="separator">
                        <h2 class="section__heading-text">Our digital products</h2>
                    </div>
                </div>
                <div class="digital-products__collection">
                    <div class="digital-products__collection-item">
                        <img src="img/products/diabase.svg" alt="Diabase icon" class="collection-item__icon">
                        <h3 class="collection-item__heading">DIABASE. Regional enterprices</h3>
                        <p class="collection-item__description">Comprehensive information about the region and
                            doingbusiness specifics.</p>
                        <a href="#">
                            <div class="collection-item__button">Visit</div>
                        </a>
                    </div>
                    <div class="digital-products__collection-item">
                        <img src="img/products/diagram.svg" alt="Diabase icon" class="collection-item__icon">
                        <h3 class="collection-item__heading">DIAGRAM. Open indicators</h3>
                        <p class="collection-item__description">Structured and valid data about the region’s foreign
                            economic activity.</p>
                        <a href="#">
                            <div class="collection-item__button">Visit</div>
                        </a>
                    </div>
                    <div class="digital-products__collection-item">
                        <img src="img/products/diamap.svg" alt="Diabase icon" class="collection-item__icon">
                        <h3 class="collection-item__heading">DIAMAP. Interactive tool</h3>
                        <p class="collection-item__description">Available land plots on the territory of Dnipropetrovsk
                            region.</p>
                        <a href="#">
                            <div class="collection-item__button">Visit</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="parthners">
            <div class="container">
                <div class="parthners__heading">
                    <div class="separator">
                        <h2 class="section__heading-text">Our parthners</h2>
                    </div>
                </div>
                <div class="parthners__collection">

                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer__column">
                <div class="footer__column-heading">                 
                    <div class="footer-logo">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                    </div>
                </div>
                <a href="#" class="footer__column-item">Dnipropetrovsk Regional Council</a>
                <a href="#" class="footer__column-item">Dnipropetrovsk Regional State Administration</a>
            </div>

            <div class="footer__column">
                <div class="footer__column-heading">
                    <h3 class="footer__column-heading-text">Links</h3>
                </div>
                <a href="#" class="footer__column-item">Starting a business</a>
                <a href="#" class="footer__column-item">Business services</a>
                <a href="#" class="footer__column-item">Preferences for investors</a>
                <a href="#" class="footer__column-item">Access to public information</a>
                <a href="#" class="footer__column-item">Projects and proposals submission</a>
            </div>

            <div class="footer__column">
                <div class="footer__column-heading">
                    <h3 class="footer__column-heading-text">About Agency</h3>
                </div>
                <a href="#" class="footer__column-item">+38 056 742 86 87</a>
                <a href="#" class="footer__column-item">info@dia.dp.ua</a>
                <a href="#" class="footer__column-item">Dnipro, 2 О. Paul Ave., office 538</a>
            </div>
        </div>
        <div class="copyright">Dnipropetrovsk Investment Agency 2022. Al Rights Reserved.</div>
    </footer>
    <script src="js/header.js"></script>
    <script src="js/menu.js"></script>
    <?php wp_footer(); ?>
    </div>
</body>

</html>