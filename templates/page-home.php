<?php
/**
 * Template Name: Home Page
 *
 * Description: The home page template
 *
 * @package Children's Museum of Illinois
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-top">
				<div class="home-slider"><?php

					putRevSlider( 'homepage' );

				?></div>
				<div class="home-sidebar">
					<div class="sidebar-menu"><?php

						if ( has_nav_menu( 'sidebar' ) ) {

							$menu['theme_location'] 	= 'sidebar';
							$menu['container'] 			= 'div';
							$menu['container_id']    	= 'menu-sidebar';
							$menu['container_class'] 	= 'menu nav-sidebar';
							$menu['menu_id']         	= 'menu-sidebar-items';
							$menu['menu_class']      	= 'menu-items';
							$menu['depth']           	= 1;
							$menu['fallback_cb']     	= '';

							wp_nav_menu( $menu );

						}

					?></div>
				</div>
			</section>
			<section class="home-bottom">
				<div class="home-quad calendar"><?php

					dynamic_sidebar( 'homepage-calendar' );

				?></div>
				<div class="home-quad promo"><?php

					$url = get_bloginfo( 'url' );

					if ( get_theme_mod( 'promo_box_url' ) ) {

						$url = get_theme_mod( 'promo_box_url' );

					}

					?><a href="<?php echo $url; ?>"><img src="<?php

					echo get_theme_mod( 'promo_box_image' );

					?>" /></a>
				</div>
				<div class="home-quad latestnews"><?php

					dynamic_sidebar( 'homepage-news' );

				?></div>
				<div class="home-quad gallery"><?php

					while ( have_posts() ) : the_post();

						?><header class="entry-header">
							<h2 class="entry-title">Image Gallery</h2>
						</header><!-- .entry-header -->
						<div class="entry-content"><?php

							the_content();

						?></div><?php

					endwhile; // loop

				?></div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>