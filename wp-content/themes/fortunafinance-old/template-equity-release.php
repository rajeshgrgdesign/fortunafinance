<?php
/*
* Template Name: Equity Release
*/
get_header(); ?>
<section id="jumbotron" class="home equity">
   <div class="inner-wrap">
      <div class="row">

         <div class="col-xs-12 col-sm-6 heading-col">
            <div class="jumbo-text">
               <?php if( get_field('main_heading') ): ?>
               <h1 class="jumbo-first-heading"><?php the_field('main_heading'); ?></h1>
               <?php endif; ?>
               <?php if( get_field('secondary_heading') ): ?>
               <h2 class="jumbo-secondary-heading"><?php the_field('secondary_heading'); ?></h2>
               <?php endif; ?>
            </div>
         </div>

         <div class="col-xs-12 col-sm-6">
            <div class="jumbo-form">
               <div class="title-block text-center">
                  <?php if( get_field('form_heading') ): ?><h4 class="color-white no-margin"><?php the_field('form_heading'); ?></h4><?php endif; ?>
                  <?php if( get_field('form_text') ): ?><p class="color-lightgrey"><?php the_field('form_text'); ?></p><?php endif; ?>                  
               </div>

<?php if( get_field('form_code') ): ?>
				<div id="aweber-form">
					<?php the_field('form_code'); ?>
				</div>
<?php endif; ?>

            </div>
         </div>

      </div>
   </div>
</section>

<section id="why-equity" class="section why-equity-section">
   <div class="inner-wrap">
      <div class="row">
         <div class="col-xs-12">
            <div class="title-block text-center">
               <?php if( get_field('why_equity_release_heading') ): ?><h2><?php the_field('why_equity_release_heading'); ?></h2><?php endif; ?>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-xs-12 col-sm-7">
            <div class="why-equity-block">
               <?php if( get_field('why_equity_release_text') ): ?><?php the_field('why_equity_release_text'); ?><?php endif; ?>
            </div>
         </div>
         <div class="col-xs-12 col-sm-5">
            <div class="review-block text-center">
               <?php if( get_field('review_heading') ): ?><h4 class="uppercase review-heading"><?php the_field('review_heading'); ?></h4><?php endif; ?>
               <div class="img-block">
                  <?php if( get_field('review_image_1') ): ?><div class="review-image"><img src="<?php the_field('review_image_1'); ?>" class="img-responsive"></div><?php endif; ?>
                  <?php if( get_field('review_image_2') ): ?><div class="review-image"><img src="<?php the_field('review_image_2'); ?>" class="img-responsive"></div><?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="why-us" class="section why-us-section">
   <div class="inner-wrap">
      <div class="row">
         <div class="col-xs-12 col-sm-4">
            <?php if( get_field('why_us_image') ): ?>
            <div class="image-block">
               <img src="<?php the_field('why_us_image'); ?>" class="img-responsive">
            </div>
            <?php endif; ?>
         </div>
         <div class="col-xs-12 col-sm-8">
            <?php if( get_field('why_us_text') ): ?>
            <div class="why-us-block">
               <?php the_field('why_us_text'); ?>
            </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>

<section id="faq" class="section faq-section">
   <div class="inner-wrap">
      
<?php if( get_field('faq_heading') ): ?>
      <div class="row">
         <div class="col-xs-12">
            <div class="title-block text-center">
               <h3><?php the_field('faq_heading'); ?></h3>
            </div>
         </div>
      </div>
<?php endif; ?>

      <div class="row">
         <div class="col-xs-12">               
            <div class="panel-group faq-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$count = 1;
if (have_rows('faq')) :
while (have_rows('faq')) : the_row();
if ($count == 1) {$tclass = " in";} else {$tclass = "";}
if ($count == 1) {$sclass = "";} else {$sclass = " collapsed";}
?>
               <div class="panel faq-panel">
                  <div class="panel-heading" role="tab" id="heading-<?php echo $count; ?>">
                     <a role="button" data-toggle="collapse" class="<?php echo $sclass; ?>" data-parent="#accordion" href="#collapse-<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $count; ?>">
                        <?php echo get_sub_field('faq_question'); ?>
                        <span class="icon"></span>
                     </a>
                  </div>
                  <div id="collapse-<?php echo $count; ?>" class="panel-collapse collapse<?php echo $tclass; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $count; ?>">
                     <div class="panel-body">
                        <?php echo get_sub_field('faq_answer'); ?>
                     </div>
                  </div>
               </div>               
<?php $count++; endwhile; ?>
<?php endif;?>
            </div>

         </div>
      </div>
   </div>
</section>

<section id="providers" class="section providers-section">
   <div class="inner-wrap">
      <div class="row">

         <div class="col-xs-12 col-sm-6">
            <div class="providers-logo clearfix">
<?php if (have_rows('providers_logo')) :
while (have_rows('providers_logo')) : the_row();?>
               <div class="logo">
                  <img src="<?php echo get_sub_field('logo'); ?>" class="img-responsive">
               </div>
<?php endwhile; endif;?>
            </div>
         </div>

         <div class="col-xs-12 col-sm-6">
            <?php if( get_field('providers_text') ): ?>
            <div class="providers-block">
               <?php the_field('providers_text'); ?>
            </div>
            <?php endif; ?>
         </div>

      </div>
   </div>   
</section>


<section id="testimonials" class="section testimonials-section">
   <div class="inner-wrap">

<?php if( get_field('testimonials_heading') ): ?>
      <div class="row">
         <div class="col-xs-12">
            <div class="title-block text-center">
               <h3><?php the_field('testimonials_heading'); ?></h3>
            </div>
         </div>
      </div>
<?php endif; ?>

      <div class="row">

         <div class="col-xs-12 col-sm-7">
<?php if( get_field('testimonials_text') ): ?>
            <div class="testimonials-block">
               <?php the_field('testimonials_text'); ?>
            </div>
<?php endif; ?>
         </div>

         <div class="col-xs-12 col-sm-5">
<?php if( get_field('testimonials_image') ): ?>
            <div class="testimonials-image">               
               <img src="<?php the_field('testimonials_image'); ?>" class="img-responsive">
            </div>
<?php endif; ?>
         </div>

      </div>
   </div>   
</section>

<?php if( get_field('what_to_do_next_text') ): ?>
<section id="what-to-do" class="section what-to-do-section">
   <div class="inner-wrap">
      <div class="row">
         <div class="col-xs-12">
            <div class="what-to-do-block">
               <?php the_field('what_to_do_next_text'); ?>
            </div>
         </div>
      </div>      
   </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>