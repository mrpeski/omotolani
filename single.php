<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package omotolani
 */

get_header(); ?>
<div class="row">
<div class="col-lg-3 col-xs-12">Something</div>
<div class="col-lg-6 col-xs-12">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'article' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
</div>
<div class="col-lg-3 col-xs-12">
	<?php get_sidebar(); ?>
</div>
</div>
<?php
get_footer();
