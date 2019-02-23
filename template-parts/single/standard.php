<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp_starter
 */

get_header();
?>
	<div id="primary" class="content-area col">
		<main id="main" class="site-main cm0">

		<?php
		while ( have_posts() ) :
			?>
			<h2 class="h2">single.php - type2: <?php echo get_post_type();?></h2>
			<?php
			the_post();

			get_template_part( 'template-parts/content/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
