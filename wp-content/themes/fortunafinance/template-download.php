<?php
/*
 * Template Name: Download
 */
get_header(); ?>

<section id="jumbotron"></section>

<section id="content">
   <div class="inner-wrap">
		<?php if( get_field('content_heading') ): ?>
      	<h1><?php the_field('content_heading'); ?></h1>
      	<?php endif; ?>
      	

      	<div class="download-group">

<?php if (have_rows('downloads')):
while (have_rows('downloads')): the_row();?>
      		<div class="download-block clearfix">

<?php if (get_sub_field('image')) { ?>
      			<div class="img-block">
      				<a href="<?php echo get_sub_field('download_file');?>" target="_blank"><img src="<?php echo get_sub_field('image');?>" class="img-responsive"></a>
      			</div>
<?php }?>
      			<div class="content-block">
<?php if (get_sub_field('heading')) { ?>
      				<h3><a href="<?php echo get_sub_field('download_file');?>" target="_blank"><?php echo get_sub_field('heading'); ?></a></h3>
<?php }?>
      				<?php echo get_sub_field('content_text'); ?>
      			</div>
      		</div>
<?php endwhile; endif;?>
      		
      	</div>


   </div>
</section>

<?php get_footer(); ?>