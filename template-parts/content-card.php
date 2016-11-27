<article id="post-<?php the_ID(); ?>" <?php post_class('popular__card'); ?>>
	<div class="entry-content">
	<?php if ( has_post_thumbnail() ) : ?>
	    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	        <?php the_post_thumbnail(array(300, 350) ); ?>
	    </a>
	<?php endif; ?>
	</div>
	<div class="meta">
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			the_category();
		?>
		<span class="comments"><?php comments_number( 'Share your thoughts', '1 Comment', '% Comments' ); ?></span>
		<span class="date pull-right"><?php the_date(); ?></span>
	</div><!-- .entry-content -->
</article><!-- #post-## -->