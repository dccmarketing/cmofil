<?php
/**
 * The template for displaying all single posts.
 *
 * @package Children's Museum of Illinois
 */

get_header();

	?><div id="primary" class="content-area">
		<main id="main" class="site-main single" role="main"><?php

		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'single' );

			the_post_navigation();

		endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_sidebar();
get_footer();
?>