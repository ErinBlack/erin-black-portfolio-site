<?php
get_header();
?>
<div class="wrap">
  <div class="primary content-area">
    <main id="main" class="site-main" role="main">


      <?php
      while(have_posts() ): the_post();
      get_template_part('template-parts/post/content', get_post_format());

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.

    ?>
  </main>
</div>
</div>
<?php get_footer();
