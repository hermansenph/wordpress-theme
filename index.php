<?php require('./wp-blog-header.php'); get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post">
  <h2><a
    href="<?php the_permalink(); ?>"
    rel="bookmark"
    title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
  </a></h2>

  <small>
    <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?>
  </small>

  <div class="entry">
   		<?php the_content(); ?>
  </div>

</div>

<?php endwhile; else : ?>

<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>
