<?php
/*
 * Template Name: DIATheme
 * Description: A simple WordPress template with language support and single post page.
 * Author: Arthur Mkrtchian
 * Author URI: Your Website
 * Version: 1.0
 */

get_header(); // Include header.php

while (have_posts()):
	the_post(); // Loop through posts
	?>


	<?php
	// Get the post thumbnail ID
	$post_thumbnail_id = get_post_thumbnail_id();

	// Get the full size image URL
	$full_image_url = wp_get_attachment_image_src($post_thumbnail_id, 'full');

	// Check if the full size image URL is available
	if ($full_image_url):
		?>

	<?php endif; ?>


	<div id="content">
		<div id="primary">
			<div id="main" class="site-main">
				<div class="container">
					<div class="post-image">
						<img src="<?php echo esc_url($full_image_url[0]); ?>" alt="<?php the_title_attribute(); ?>">
					</div>
					<div class="row">
						<div class="col-md-8">
							<!-- Main Content Area -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="entry-header">
									<h2 class="entry-title">
										<?php the_title(); ?>
									</h2>
								</div>
						</div>
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



	<div class="related-posts">

		<?php
		// Get the tags of the current post
		$post_tags = wp_get_post_tags(get_the_ID());

		// Prepare an array of tag IDs
		$tag_ids = array();
		foreach ($post_tags as $tag) {
			$tag_ids[] = $tag->term_id;
		}

		// Query related posts
		$args = array(
			'post__not_in' => array(get_the_ID()),
			// Exclude the current post
			'tag__in' => $tag_ids,
			// Posts with matching tags
			'posts_per_page' => 3,
			// Number of related posts to display
			'ignore_sticky_posts' => 1, // Ignore sticky posts
		);
		$related_posts = new WP_Query($args);

		// Loop through the related posts
		if ($related_posts->have_posts()):
			while ($related_posts->have_posts()):
				$related_posts->the_post();
				?>
				<!-- Add your HTML markup for each related post here -->

				<div class="related-post">
					<div class="related-post-thumbnail">
						<?php if (has_post_thumbnail()): // Check if the post has a thumbnail ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('thumbnail'); // Display the post thumbnail ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="related-post-content">
						<h3 class="related-post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title(); // Display the post title ?>
							</a>
						</h3>
					</div>
				</div>

				<?php
			endwhile;
			wp_reset_postdata(); // Reset the post data
		endif;
		?>
	</div>

	<?php
endwhile; // End of the loop.
get_footer(); // Include footer.php
?>