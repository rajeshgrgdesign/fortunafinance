<?php
/*
* Template Name: Thank You
*/

get_header(); ?>
<section id="jumbotron"></section>
<section id="content">
   <div class="inner-wrap">
      <?php while (have_posts()) : the_post(); ?>
      <h2><?php if( get_field('page_heading') ): ?><?php the_field('page_heading'); ?><?php else: ?><?php the_title(); ?><?php endif; ?></h2>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
   </div>
</section>
<?php get_footer(); ?>
