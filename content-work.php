<?php
/**
 * Template for displaying art custom post type entries
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
	<div class="title-image">
			<img src="<?php the_field('image'); ?>" alt="Example image of <?php the_title(); ?>">
	</div>
	


</article><!-- #post -->
