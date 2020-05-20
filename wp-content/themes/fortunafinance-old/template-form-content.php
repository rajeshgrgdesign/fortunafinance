<?php
/*
 * Template Name: Form Content
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

<?php if(have_rows('content_section')): while(have_rows('content_section')): the_row();?>
<section id="content">
   <div class="inner-wrap">
      <h1><?php the_title(); ?></h1>
      <?php if( get_sub_field('section_heading') ): ?>
      <h2><?php the_sub_field('section_heading'); ?></h2>
      <?php endif; ?>
      <div class="row">
         <div class="col-xs-12 col-sm-6">
            <?php the_sub_field('paragraph_left'); ?>
         </div>
         <div class="col-xs-12 col-sm-6">
            <?php the_sub_field('paragraph_right'); ?>
         </div>
      </div>
      <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]
');?>
   </div>
</section>
<?php endwhile; wp_reset_postdata(); endif;?>
<?php get_footer(); ?>