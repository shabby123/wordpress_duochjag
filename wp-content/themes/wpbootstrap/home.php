<?php get_header(); ?>


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     	<h2><a class="notextdecoration" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     	<p><em><?php the_time('l, F j, Y'); ?></em></p>
     	<p><?php the_excerpt(); ?></p>
     	<p><a href="<?php echo get_permalink(); ?>">Read more...</a></p>

  <?php endwhile; else: ?>
    	<p><?php _e('Sorry, there are no posts.'); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>