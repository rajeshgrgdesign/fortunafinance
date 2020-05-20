<?php
/*
 * Template Name: Form Content
 */
get_header(); ?>

<section id="content" class="section-form">
   <div class="inner-wrap">
   		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
   </div>
</section>

<?php get_footer(); ?>