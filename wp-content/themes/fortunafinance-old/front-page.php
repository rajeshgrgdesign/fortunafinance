<?php
/*
* Template Name: Home
*/
get_header(); ?>
<section id="jumbotron" class="home">
   <div class="container-fluid">
      <div class="jumbo-text">
         <?php if( get_field('main_heading') ): ?>
         <h1 class="jumbo-first-heading"><?php the_field('main_heading'); ?></h1>
         <?php endif; ?>
         <?php if( get_field('secondary_heading') ): ?>
         <h2 class="jumbo-secondary-heading"><?php the_field('secondary_heading'); ?></h2>
         <?php endif; ?>
      </div>
   </div>
</section>
<section id="content">
   <div class="inner-wrap">
      <?php if( get_field('our_company_heading') ): ?>
      <h2><?php the_field('our_company_heading'); ?></h2>
      <?php endif; ?>
      <?php if( get_field('our_company_text') ): ?><?php the_field('our_company_text'); ?><?php endif; ?>
      <!-- <img src="<?php bloginfo('template_directory'); ?>/images/company-icon.png" alt="Our Company"/> -->
   </div>
</section>
<section id="what-we-offer">
   <div class="inner-wrap">
      <?php if( get_field('what_we_offer_heading') ): ?>
      <h2><?php the_field('what_we_offer_heading'); ?></h2>
      <?php endif; ?>
      <div class="row">
         <div class="col-lg-6 col-sm-6">
            <?php if( get_field('column_1_text') ): ?><?php the_field('column_1_text'); ?><?php endif; ?>
         </div>
         <div class="col-lg-6 col-sm-6">
            <?php if( get_field('column_2_text') ): ?><?php the_field('column_2_text'); ?><?php endif; ?>
         </div>
      </div>
   </div>
</section>
<section id="expert-advisers">
   <div class="inner-wrap">
      <?php if( get_field('expert_advisers_heading') ): ?>
      <h2><?php the_field('expert_advisers_heading'); ?></h2>
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
</section>
<?php get_footer(); ?>