<?php

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
	<div class="title-image">
			<img src="<?php the_field('image'); ?>" alt="Example image of <?php the_title(); ?>">
	</div>
	<div class="text-wrapper">
		<div class="entry-content">
			<p><?php the_field('description'); ?></p>
		</div><!-- .entry-content -->
		<div class="container screenshotContainer">
			<div class="three-grid">
				<img class="three-grid-img" src="<?php the_field('screenshot_1') ?>" alt="">
			</div>
			<div class="three-grid">
				<img class="three-grid-img" src="<?php the_field('screenshot_2') ?>" alt="">
			</div>
			<div class="three-grid">
				<img  class="three-grid-img" src="<?php the_field('screenshot_3') ?>" alt="">
			</div>
		</div>
		<div class="container">
			<div class="two-grid">
				<a href="<?php the_field('github_link'); ?>">
					<img class="two-grid-img"
					src="http://localhost:8888/my-theme/wp-content/uploads/2017/08/github.png"
					alt="view code on github">
				</a>
				<a href="<?php the_field('github_link'); ?>"><h3>Github of This Project</h3></a>
			</div>
			<div class="two-grid">
				<a href="<?php the_field('hosted'); ?>">
					<img class="two-grid-img"
					src="http://localhost:8888/my-theme/wp-content/uploads/2017/08/computer-icon.png"
					alt="view code on github">
				</a>
				<a href="<?php the_field('hosted'); ?>"><h3>See Application</h3></a>
			</div>
		</div>

	</div>


</article><!-- #post -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
