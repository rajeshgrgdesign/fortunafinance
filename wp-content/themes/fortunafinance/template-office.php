<?php
/*
 * Template Name: Office
 */
get_header(); ?>
<section id="jumbotron"></section>

<section id="profile" class="section profile-section office-section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-xs-12">
            <div class="breadcrumb">
               <a href="<?php bloginfo('url'); ?>">Home</a> > <a href="<?php bloginfo('url'); ?>/office">Offices</a> > <?php the_title(); ?>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid">
      <div class="row">
         <!--Left Content-->
         <div class="col-xs-12">
            <div class="title-block">
<?php if( get_field('location_title') ): ?><h1 class="h1"><?php the_field('page_title'); ?></h1><?php endif; ?>
<?php if( get_field('subtitle') ): ?><h2 class="h2"><?php the_field('subtitle'); ?></h2><?php endif; ?>
            </div>
         </div>
      </div>
      <div class="row">
         <!--Left Content-->
         <div class="col-xs-12 col-sm-8 profile-left-col office-left">
            <div class="content-block intro-block area-block">
<?php if( get_field('advice_area_title') ): ?>
               <h3><?php the_field('advice_area_title'); ?></h3>
<?php endif; ?>
               <?php the_field('advice_area_content'); ?>
            </div>

            <div class="content-block about-block">
<?php if( get_field('about_us_title') ): ?>
               <h5><?php the_field('about_us_title'); ?></h5>
<?php endif; ?>
<?php if( get_field('about_us_content') ): ?>
               <?php the_field('about_us_content'); ?>
<?php endif; ?>
            </div>

            <div class="content-block advisor-profile">
<?php if( get_field('advisers_title') ): ?>
               <h5><?php the_field('advisers_title'); ?></h5>
<?php endif; ?>

<?php if (have_rows('advisers')) :?>
<?php while (have_rows('advisers')) : the_row();?>
               <div class="advisor-block">
                  <div class="author-image">
                     <a href="<?php echo get_sub_field('profile_url'); ?>"><img alt="<?php echo get_sub_field('adviser_name'); ?>" src="<?php echo get_sub_field('adviser_image'); ?>" class="img-responsive"></a>
                  </div>
                  <div class="author-info">
                     <a href="<?php echo get_sub_field('profile_url'); ?>"><h3><?php echo get_sub_field('adviser_name'); ?></h3></a>
                     <h5 class="designation"><?php echo get_sub_field('designation'); ?></h5>
                     <p class="bio"><?php echo get_sub_field('biography_description'); ?></p>
                  </div>
               </div>
<?php endwhile; ?>
<?php endif;?>
            </div>

         </div>
         <!--Left Content-->

         <!--Right Content-->
         <div class="col-xs-12 col-sm-4 profile-right-col office-right">
            <div class="sidebar-block location-map">
<?php if( get_field('location_title') ): ?>
               <h5><?php the_field('location_title'); ?></h5>
<?php endif; ?>
<?php if( get_field('location_details') ): ?>
               <?php the_field('location_details'); ?>
<?php endif; ?>
            </div>
         </div>
         <!--Right Content-->

      </div>
   </div>
</section>


<section class="section post-section">
<?php if( get_field('news_title') ): ?>
   <div class="container-fluid">
      <div class="title-block">
         <h2 class="h3"><?php the_field('news_title'); ?></h2>
      </div>
   </div>
<?php endif; ?>

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