<?php
/*
 * Template Name: Profile
 */
get_header(); ?>
<section id="jumbotron"></section>

<section id="profile" class="section profile-section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-xs-12">
            <div class="breadcrumb">
               <a href="<?php bloginfo('url'); ?>">Home</a> > <a href="<?php bloginfo('url'); ?>/people">People</a> > <?php the_field('full_name'); ?>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row">
         <!--Left Content-->
         <div class="col-xs-12 col-sm-8 profile-left-col">
            <div class="title-block">
<?php if( get_field('full_name') ): ?><h1 class="h1"><?php the_field('full_name'); ?></h1><?php endif; ?>
<?php if( get_field('designation') ): ?><h2 class="h2"><?php the_field('designation'); ?></h2><?php endif; ?>
            </div>

<?php if( get_field('intro_text') ): ?>
            <div class="content-block intro-block"><?php the_field('intro_text'); ?></div>
<?php endif; ?>

<?php if( get_field('experience_text') ): ?>
            <div class="content-block experience-block">
               <?php the_field('experience_text'); ?>
            </div>
<?php endif; ?>

            <div class="content-block service-block">
<?php if( get_field('services_title') ): ?>
               <h5><?php the_field('services_title'); ?></h5>
<?php endif; ?>

<?php if (have_rows('services')) :?>
               <div class="service-list">
<?php while (have_rows('services')) : the_row();?>
                  <span><?php echo get_sub_field('service'); ?></span>
<?php endwhile; ?>
               </div>
<?php endif;?>
            </div>

         </div>
         <!--Left Content-->

         <!--Right Content-->
         <div class="col-xs-12 col-sm-4 profile-right-col">
<?php if( get_field('profile_picture') ): ?>
            <div class="sidebar-block profile-picture">
               <img class="img-responsive" src="<?php the_field('profile_picture'); ?>" alt="<?php the_field('full_name'); ?>">
            </div>
<?php endif; ?>

            <div class="sidebar-block contact-block">
<?php if( get_field('contact_information') ): ?>
               <div class="contact-info"><?php the_field('contact_information'); ?></div>
<?php endif; ?>
               <div class="contact-links">
<?php if( get_field('vcard') ): ?><a href="<?php the_field('vcard'); ?>" target="_blank">Download vCard</a><?php endif; ?>
<?php if( get_field('linkedin_profile') ): ?><a href="<?php the_field('linkedin_profile'); ?>" target="_blank">LinkedIn Profile</a><?php endif; ?>
               </div>
            </div>

            <div class="sidebar-block qualification-block">
<?php if( get_field('qualifications_title') ): ?>
               <h5><?php the_field('qualifications_title'); ?></h5>
<?php endif; ?>
<?php if (have_rows('qualifications')) :?>
<?php while (have_rows('qualifications')) : the_row();?>
               <div class="q-list"><?php echo get_sub_field('qualification'); ?></div>
<?php endwhile; ?>
<?php endif;?>
            </div>

<?php if( get_field('details_text') ): ?>
            <div class="sidebar-block details-block">
<?php if( get_field('more_details_title') ): ?>
               <h5><?php the_field('more_details_title'); ?></h5>
<?php endif; ?>
               <?php the_field('details_text'); ?>
            </div>
<?php endif; ?>

<?php if (have_rows('offices')) :?>
<?php while (have_rows('offices')) : the_row();?>
            <div class="sidebar-block office-block">
               <?php echo get_sub_field('office_address'); ?>
            </div>
<?php endwhile; ?>
<?php endif;?>

         </div>
         <!--Right Content-->

      </div>
   </div>
</section>


<section class="section post-section">
   <div class="container-fluid">
      <div class="title-block">
         <h2 class="h3">Key Articles</h2>
      </div>
   </div>
<?php $user_id = get_field('user');?>
<?php $args=array('post_type'=>'post','author'=> $user_id, 'post_status'=>'publish','posts_per_page'=>3); $query=new WP_Query($args);?>
<?php if($query->have_posts()):?>  
   <div class="container-fluid">
      <div class="row">
<?php while($query->have_posts()): $query->the_post();?>
         <div class="col-xs-12 col-sm-4">
            <div class="article-block">
               <a href="<?php the_permalink();?>"><h6><?php the_title();?></h6></a>
               <div class="meta-date"><?php echo get_the_date(); ?></div>
            </div>
         </div>
<?php endwhile; wp_reset_query();?>
      </div>
   </div>
<?php endif;?>
   <div class="container-fluid">
      <div class="bottom-block"></div>
   </div>
</section>


<?php get_footer('profile'); ?>