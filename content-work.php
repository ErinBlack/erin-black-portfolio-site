<?php
/**
 * Template for displaying art custom post type entries
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header><!-- .entry-header -->
	<div class="title-image">
				<img src="<?php the_field('image'); ?>" alt="Example image of <?php the_title(); ?>">
	</div>

	<div class="entry-content">
		<p><?php the_field('description'); ?></p>
	</div><!-- .entry-content -->

</article><!-- #post -->
