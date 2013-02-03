<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     	<h2><?php the_title(); ?></h2>
     	<p><em><?php the_time('l, F j, Y'); ?></em></p>
     	<p><?php the_content(); ?></p>

    	<hr>

    	<?php comments_template(); ?>

  <?php endwhile; else: ?>
    	<p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>