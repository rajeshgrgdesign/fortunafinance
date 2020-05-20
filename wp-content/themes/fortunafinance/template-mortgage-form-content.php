<?php
/*
 * Template Name: Mortgage Form Content
 */
get_header('application'); ?>

<section id="content" class="section-form section-mortgage-form">
   <div class="inner-wrap">
   		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
   </div>
</section>

<?php get_footer('application'); ?>