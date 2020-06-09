<?php
/*
* Template Name: Home
*/
get_header(); ?>
<section id="jumbotron" class="home">
   <div class="container-fluid">
      <div id="hero-slider" class="owl-carousel hero-slider">
<?php  if(have_rows('jumbotron_slider')):while(have_rows('jumbotron_slider')): the_row();?>
         <div class="slider-block">
            <div class="content">
<?php if( get_sub_field('main_heading') ): ?>
               <h1 class="jumbo-first-heading"><?php the_sub_field('main_heading'); ?></h1>
<?php endif; ?>
<?php if( get_sub_field('secondary_heading') ): ?>
               <p class="jumbo-secondary-heading"><?php the_sub_field('secondary_heading'); ?></p>
<?php endif; ?>
               <h5><a href="<?php the_sub_field('button_link'); ?>" class="btn btn-primary"><?php the_sub_field('button_text'); ?></a></h5>
            </div>
         </div>         
<?php endwhile; endif;?>
      </div>
   </div>
</section>

<?php if(have_rows('highlight_widget')):?>
<section class="highlight-section">
   <div class="inner-wrap">
      <div class="row">
<?php while(have_rows('highlight_widget')): the_row();?>
         <div class="col-lg-6 col-sm-6">
            <div class="highlight-block">
<?php if( get_sub_field('highlight_heading') ): ?>
               <h3><?php the_sub_field('highlight_heading'); ?></h3>
<?php endif; ?>
<?php if( get_sub_field('highlight_text') ): ?>
               <p><?php the_sub_field('highlight_text'); ?></p>
<?php endif; ?>
<?php if( get_sub_field('button_text') || get_sub_field('button_link') ): ?>
               <a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
<?php endif; ?>
            </div>
         </div>
<?php endwhile; ?>
      </div>
   </div>
</section>
<?php endif;?>

<?php if(have_rows('services_widget')):?>
<section class="service-section">
   <div class="inner-wrap">
      <div class="row">
<?php while(have_rows('services_widget')): the_row();?>
         <div class="col-xs-12 col-sm-4 col-service">
            <div class="service-block">
<?php if( get_sub_field('service_title') ): ?>
               <h2 class="h3"><?php the_sub_field('service_title'); ?></h2>
<?php endif; ?>
<?php if( get_sub_field('service_text') ): ?>
               <p><?php the_sub_field('service_text'); ?></p>
<?php endif; ?>
<?php if( get_sub_field('service_button_text') || get_sub_field('service_button_link') ): ?>
               <a href="<?php the_sub_field('service_button_link'); ?>"><?php the_sub_field('service_button_text'); ?></a>
<?php endif; ?>
            </div>
         </div>
<?php endwhile; ?>
      </div>
   </div>
</section>
<?php endif;?>

<section class="whatweoffer-section">
   <div class="inner-wrap">
<?php if( get_field('what_we_offer_heading') ): ?>
      <h2 class="h3"><?php the_field('what_we_offer_heading'); ?></h2>
<?php endif; ?>
      <div class="row">
<?php if( get_field('column_1_text') ): ?>
         <div class="col-sm-12">
            <div class="content-block">
               <?php the_field('column_1_text'); ?>
            </div>
         </div>
<?php endif; ?>
<?php if( get_field('column_2_text') ): ?>
         <div class="col-sm-12">
            <div class="content-block">
               <?php the_field('column_2_text'); ?>
            </div>
         </div>
<?php endif; ?>
      </div>
   </div>
</section>

<!-- <section id="content">
   <div class="inner-wrap">
      <?php if( get_field('our_company_heading') ): ?>
      <h2 class="h3 text-center"><?php the_field('our_company_heading'); ?></h2>
      <?php endif; ?>
      <?php if( get_field('our_company_text') ): ?><?php the_field('our_company_text'); ?><?php endif; ?>
   </div>
</section> -->
<!-- 
<section id="expert-advisers">
   <div class="inner-wrap">
      <?php if( get_field('expert_advisers_heading') ): ?>
      <h2 class="h3 text-center"><?php the_field('expert_advisers_heading'); ?></h2>
      <?php endif; ?>
      <div class="row">
         <div class="col-xs-12 col-sm-9">
            <?php if( get_field('expert_advisers_text') ): ?><?php the_field('expert_advisers_text'); ?><?php endif; ?>
         </div>
         <div class="col-xs-12 col-sm-3">
            <?php if( get_field('image_1') ): ?><img src="<?php the_field('image_1'); ?>" class="img-responsive" alt="CII & PFS Members"/><?php endif; ?>
         </div>
      </div>
   </div>
</section> -->

<section id="product">
   <div class="wrap">
      <div class="row">
         <div class="col-xs-12 col-sm-5 col-sm-offset-7">
            <div class="product-text">
               <?php if( get_field('heading_1_ps', 'option') ): ?>
               <h3><?php the_field('heading_1_ps', 'option'); ?></h3>
               <?php endif; ?>

               <?php if( get_field('heading_2_ps', 'option') ): ?>
               <h4><?php the_field('heading_2_ps', 'option'); ?></h4>
               <?php endif; ?>

               <?php if( get_field('product_text', 'option') ): ?>
               <?php the_field('product_text', 'option'); ?>
               <?php endif; ?>
               
               <?php if( get_field('call_to_action_ps', 'option') ): ?>
               <h5><a href="<?php echo site_url(); ?>/office/hertford/"><?php the_field('call_to_action_ps', 'option'); ?></a></h5>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>