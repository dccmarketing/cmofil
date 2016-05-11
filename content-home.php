<?php
/**
 * The template used for displaying the home page content.
 *
 * @package Children's Museum of Illinois
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header contenthome"><?php

		the_title( '<h1 class="entry-title">', '</h1>' );

	?></header><!-- .entry-header -->

	<div class="entry-content"><?php

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'cmofil' ),
			'after'  => '</div>',
		) );

	?></div><!-- .entry-content -->

	<footer class="entry-footer"><?php

		edit_post_link( __( 'Edit', 'cmofil' ), '<span class="edit-link">', '</span>' );

	?></footer><!-- .entry-footer -->
</article><!-- #post-## -->