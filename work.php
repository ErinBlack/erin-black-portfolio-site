<?php
/**
 * Template Name: Work Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</div><!-- .entry-header -->
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<?php endif; ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'myfirsttheme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

				<?php //comments_template(); ?>
			<?php endwhile; ?>

			<?php
			    $args = array(
			        'post_type' => 'work',
			        'orderby' => 'title',
			        'order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );
			?>
			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php get_template_part( 'content', 'work' ); ?>

			<?php endwhile; endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
