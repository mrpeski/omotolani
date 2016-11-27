<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package omotolani
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$args = [ 'hide_empty' => true];
		$category = get_categories($args);
		// var_dump($category);
		foreach( $category as $item ) {
			// $arr[$item->cat_name] = array($item->cat_ID, $item->category_count);
			$arr[] = $item->cat_ID;
		}

		$str_arr = implode( ',', $arr);

		$cat = $str_arr;
		$orderby = 'comment_count';
		// $date = ;

		$args = compact('orderby', 'cat' );

		//var_dump($args);
		//$args = [ category =];
		$query = new WP_Query($args);

		if ( $query->have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( $query->have_posts() ) : $query->the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'card' );

			endwhile;

			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
