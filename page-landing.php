<?php
/**
 * Genesis Sample.
 *
 * This file adds the landing page template to the Genesis Sample Theme.
 *
 * Template Name: Landing
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

// Add landing page body class to the head
add_filter( 'body_class', 'genesis_sample_add_body_class' );
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'landing';

	return $classes;

}

// Remove Skip Links
remove_action ( 'genesis_before_header', 'genesis_skip_links', 5 );

// Dequeue Skip Links Script
add_action( 'wp_enqueue_scripts', 'genesis_sample_dequeue_skip_links' );
function genesis_sample_dequeue_skip_links() {
	wp_dequeue_script( 'skip-links' );
}

// Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Remove site header elements
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

// Remove navigation
remove_theme_support( 'genesis-menus' );

// Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove footer widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

// Remove site footer elements
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Remove page title
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

// Remove site inner wrap
add_filter( 'genesis_structural_wrap-site-inner', '__return_empty_string' );

// Remove edit link
add_filter ( 'genesis_edit_post_link' , '__return_false' );

// Load landing page styles
add_action( 'wp_enqueue_scripts', 'landing_do_custom_styles' );
function landing_do_custom_styles() {
	wp_enqueue_style( 'landing', CHILD_URL . '/landing.css', array(), PARENT_THEME_VERSION );
}

//======================================================================
// BEGIN ACF CONTENT
//======================================================================

// Display top logo if selected
add_action( 'genesis_entry_header', 'landing_do_optional_logo' );
function landing_do_optional_logo() {
	if( get_field('logo_image') ) { ?>
		<div class="landing-header">
			<div class="wrap">
				<a href="<?php echo get_field('logo_url'); ?>">
				<img class="aligncenter" src="<?php echo get_field('logo_image'); ?>" />
				</a>
			</div>
		</div>
	<?php }
}

// Display content of flexible content layouts
add_action( 'genesis_entry_content', 'landing_do_acf_content' );
function landing_do_acf_content() {
	if( have_rows('landing_page_content') ) { ?>

		<section class="landing-content">

		<?php while ( have_rows('landing_page_content') ) : the_row();

			// Hero with text and button layout
			if( get_row_layout() == 'hero_with_text_and_button' ) { ?>

				<div class="landing-hero" style="background: url(<?php echo get_sub_field('hero_image'); ?>); background-size: cover;">
					<div class="hero-content light dark">
						<div class="wrap">
							<h1 class="hero-title"><?php echo get_sub_field('headline'); ?></h1>
							<p><?php echo get_sub_field('text'); ?></p>
							<a class="button" href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('button'); ?></a>
						</div>
					</div>
				</div>

			<?php } 

			// Headline with WYSIWYG
			else if( get_row_layout() == 'headline_with_wysiwyg' ) { ?>

				<div class="heading-text" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="wrap">
						<h2 class="plain-title"><?php echo get_sub_field('headline'); ?></h2>
						<?php echo get_sub_field('content'); ?>
					</div>
				</div>

			<?php }

			// Left image right text
			else if( get_row_layout() == 'left_image_right_text' ) { ?>

				<div class="left-image-right-text" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="wrap">
						<div class="one-half first">
							<img class="aligncenter" src="<?php echo get_sub_field('image'); ?>" />
						</div>
						<div class="one-half">
							<?php echo get_sub_field('text'); ?>
						</div>
					</div>
				</div>

			<?php }

			// Blockquote
			else if( get_row_layout() == 'blockquote' ) { ?>

				<div class="landing-quote" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="wrap">
						<div class="quote-text">
							<h4 class="quote"><?php echo get_sub_field('text'); ?></h4>
							<h6 class="quote-author"><?php echo get_sub_field('author'); ?></h6>
							<?php if( get_sub_field('company') ) { ?>
								<span class="company"><?php echo get_sub_field('company'); ?></span>
							<?php } ?>
						</div>
					</div>
				</div>

			<?php }

			// Left text right image
			else if( get_row_layout() == 'left_text_right_image' ) { ?>

				<div class="left-image-right-text" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="wrap">
						<div class="one-half first">
							<?php echo get_sub_field('text'); ?>
						</div>
						<div class="one-half">
							<img class="aligncenter" src="<?php echo get_sub_field('image'); ?>" />
						</div>
					</div>
				</div>

			<?php }

			// 2 column pricing table
			else if( get_row_layout() == '2_column_pricing_table' ) { ?>

				<div class="pricing-2" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="wrap">
						<h2 class="pricing-headline"><?php echo get_sub_field('heading'); ?></h2>

						<?php if( have_rows('columns') ) { 
							
							$columns = 2;
							$increment = 0; ?>

						<section class="pricing-columns">

						<?php while ( have_rows('columns') ) : the_row(); ?>

							<div class="pricing-table one-half <?php if($increment % $columns == 0){echo'first';}$increment++; ?>">
								<h5 class="pricing-title"><?php echo get_sub_field('column_heading'); ?></h5>
								<h6 class="price"><?php echo get_sub_field('price'); ?></h6>

								<?php if( have_rows('features_list') ) { ?>

								<ul class="pricing-features">

								<?php while ( have_rows('features_list') ) : the_row(); ?>
									<li class="single-feature"><?php echo get_sub_field('feature'); ?></li>
								<?php endwhile; ?>
								</ul>
								<?php } ?>
								<div class="price-button">
									<a class="button" href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('button'); ?></a>
								</div>
							</div>
						<?php endwhile; ?>
						</section>
						<?php } ?>
					</div>
				</div>

			<?php }

			// 3 column pricing table
			else if( get_row_layout() == '3_column_pricing_table' ) { ?>

				<div class="pricing-3" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="wrap">
						<h2 class="pricing-headline"><?php echo get_sub_field('heading'); ?></h2>

						<?php if( have_rows('columns') ) { 
							
							$columns = 3;
							$increment = 0; ?>

						<section class="pricing-columns">

						<?php while ( have_rows('columns') ) : the_row(); ?>

							<div class="pricing-table one-third <?php if($increment % $columns == 0){echo'first';}$increment++; ?>">
								<h5 class="pricing-title"><?php echo get_sub_field('column_heading'); ?></h5>
								<h6 class="price"><?php echo get_sub_field('price'); ?></h6>

								<?php if( have_rows('features_list') ) { ?>

								<ul class="pricing-features">

								<?php while ( have_rows('features_list') ) : the_row(); ?>
									<li class="single-feature"><?php echo get_sub_field('feature'); ?></li>
								<?php endwhile; ?>
								</ul>
								<?php } ?>
								<div class="price-button">
									<a class="button" href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('button'); ?></a>
								</div>
							</div>
						<?php endwhile; ?>
						</section>
						<?php } ?>
					</div>
				</div>

			<?php }

			// 4 column pricing table
			else if( get_row_layout() == '4_column_pricing_table' ) { ?>

				<div class="pricing-4" style="background-color: <?php echo get_sub_field('background_color'); ?>">
					<div class="wrap">
						<h2 class="pricing-headline"><?php echo get_sub_field('heading'); ?></h2>

						<?php if( have_rows('columns') ) { 
							
							$columns = 4;
							$increment = 0; ?>

						<section class="pricing-columns">

						<?php while ( have_rows('columns') ) : the_row(); ?>

							<div class="pricing-table one-fourth <?php if($increment % $columns == 0){echo'first';}$increment++; ?>">
								<h5 class="pricing-title"><?php echo get_sub_field('column_heading'); ?></h5>
								<h6 class="price"><?php echo get_sub_field('price'); ?></h6>

								<?php if( have_rows('features_list') ) { ?>

								<ul class="pricing-features">

								<?php while ( have_rows('features_list') ) : the_row(); ?>
									<li class="single-feature"><?php echo get_sub_field('feature'); ?></li>
								<?php endwhile; ?>
								</ul>
								<?php } ?>
								<div class="price-button">
									<a class="button" href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('button'); ?></a>
								</div>
							</div>
						<?php endwhile; ?>
						</section>
						<?php } ?>
					</div>
				</div>

			<?php }
			

			endwhile; ?>

		</section> 

	<?php }

}

//======================================================================
// END ACF CONTENT
//======================================================================

