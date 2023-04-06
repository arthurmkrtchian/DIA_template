<?php
/*
 * Template Name: DIATheme
 * Description: A simple WordPress template with language support and single post page.
 * Author: Arthur Mkrtchian
 * Author URI: Your Website
 * Version: 1.0
 */

get_header(); // Include header.php

while (have_posts()) : the_post(); // Loop through posts
?>

    <div id="content">
        <div id="primary">
            <div id="main" class="site-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Main Content Area -->
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <header class="entry-header">
                                    <h1 class="entry-title"><?php the_title(); ?></h1>
                                </header>

                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <!-- Sidebar Area -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
endwhile; // End of the loop.
get_footer(); // Include footer.php
?>