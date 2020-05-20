<?php
/*
 * Template Name: Default Template
 */
get_header(); ?>
<section id="jumbotron"></section>

<section id="content">
   <div class="inner-wrap">
<?php while (have_posts()) : the_post(); ?>
      <div class="content">
         <?php the_content(); ?>
      </div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
   </div>
</section>
<?php get_footer(); ?>