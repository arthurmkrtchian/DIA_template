
    <main>
        <section class="news">
            <div class="container">
                <div class="main-slider">
                    <img src="img/slider.png" alt="" class="slider-img">
                    <?php echo do_shortcode('[ssslider id="36975"]') ?>
                </div>
                <div class="last-news__collection">
                    <?php
                    $args = [
                        "post_type" => "post",
                        "posts_per_page" => 4,
                        "orderby" => "date",
                    ];
                    $query = new WP_Query($args);
                    if ($query->have_posts()):
                        while ($query->have_posts()):
                            $query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="last-news__item">

                                <?php
                                if (has_post_thumbnail()) {
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    ?>
                                    <div class="last-news__item-image">
                                        <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" />
                                    </div>
                                <?php } ?>

                                <h3 class="post-caption">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="post-description">
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    echo mb_substr($excerpt, 0, 150, 'UTF-8') . '...';


                                    ?>
                                </p>
                            </a>
                        <?php endwhile; endif;
                    wp_reset_postdata();
                    ?>





                </div>
            </div>
        </section>
        <section class="about-region" id="about-region">
            <div class="container">
                <div class="about-region__heading">
                    <img id="region-coat" src="http://localhost/dia/wp-content/uploads/diatheme/region-coat.svg"
                        alt="Dnipropetrovsk Region Coat">
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
                            <img src="http://localhost/dia/wp-content/uploads/diatheme/about-region/area.svg"
                                alt="Area icon" class="region-indicators__item-icon">
                        </div>
                        <p class="region-indicators__item-description">of Ukraine`s</p>
                        <p class="region-indicators__item-title">area</p>
                    </div>
                    <div class="region-indicators__item">
                        <div class="region-indicators__item-heading">
                            <p class="region-indicators__item-value">7.5%</p>
                            <img src="http://localhost/dia/wp-content/uploads/diatheme/about-region/chart.svg"
                                alt="Chart icon" class="region-indicators__item-icon">
                        </div>
                        <p class="region-indicators__item-description">of Ukraine`s</p>
                        <p class="region-indicators__item-title">population</p>
                    </div>
                    <div class="region-indicators__item">
                        <div class="region-indicators__item-heading">
                            <p class="region-indicators__item-value">10%</p>
                            <img src="http://localhost/dia/wp-content/uploads/diatheme/about-region/population.svg"
                                alt="Population icon" class="region-indicators__item-icon">
                        </div>
                        <p class="region-indicators__item-description">of Ukraine`s</p>
                        <p class="region-indicators__item-title">GDP</p>
                    </div>
                    <div class="region-indicators__item">
                        <div class="region-indicators__item-heading">
                            <p class="region-indicators__item-value">5.3%</p>
                            <img src="http://localhost/dia/wp-content/uploads/diatheme/about-region/area.svg"
                                alt="Area icon" class="region-indicators__item-icon">
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
                        <img src="http://localhost/dia/wp-content/uploads/diatheme/products/diabase.svg"
                            alt="Diabase icon" class="collection-item__icon">
                        <h3 class="collection-item__heading">DIABASE. Regional enterprices</h3>
                        <p class="collection-item__description">Comprehensive information about the region and
                            doingbusiness specifics.</p>
                        <a href="#">
                            <div class="collection-item__button">Visit</div>
                        </a>
                    </div>

                    <div class="digital-products__collection-item">
                        <img src="http://localhost/dia/wp-content/uploads/diatheme/products/diagram.svg"
                            alt="Diabase icon" class="collection-item__icon">
                        <h3 class="collection-item__heading">DIAGRAM. Open indicators</h3>
                        <p class="collection-item__description">Structured and valid data about the region’s foreign
                            economic activity.</p>
                        <a href="#">
                            <div class="collection-item__button">Visit</div>
                        </a>
                    </div>
                    <div class="digital-products__collection-item">
                        <img src="http://localhost/dia/wp-content/uploads/diatheme/products/diamap.svg"
                            alt="Diabase icon" class="collection-item__icon">
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
    <?php wp_footer(); ?>