<?php
/*
 * Template Name: Internal
 */
get_header(); ?>
<section id="jumbotron">
   <!-- <div class="container-fluid jumbo-container">
      <div class="jumbo-text">
         <?php if( get_field('main_heading') ): ?>
         <h2 class="jumbo-first-heading"><?php the_field('main_heading'); ?></h2>
         <?php endif; ?>
         <?php if( get_field('secondary_heading') ): ?>
         <h2 class="jumbo-secondary-heading"><?php the_field('secondary_heading'); ?></h2>
         <?php endif; ?>
      </div>
   </div> -->
</section>



<section id="content">
   <div class="inner-wrap">
      <?php if( get_field('content_heading') ): ?>
      <h1><?php the_field('content_heading'); ?></h1>
      <?php endif; ?>
      <?php if( get_field('content_text') ): ?><?php the_field('content_text'); ?><?php endif; ?>
   </div>
</section>
<?php get_footer(); ?>