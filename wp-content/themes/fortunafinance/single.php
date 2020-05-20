<?php get_header();
$id = get_the_id();
$terms = get_the_terms( $id, 'category' );
$category_name = get_the_category();
$author = get_the_author();
global $post;
// Get author's biographical information or description
$user_description = get_the_author_meta( 'user_description', $post->post_author );
?>

<section id="jumbotron"></section>

<section id="content" class="section section-post">
    <div class="inner-wrap">
        <div class="breadcrumb">
           <a href="<?php bloginfo('url'); ?>">Home</a> > <a href="<?php bloginfo('url'); ?>/article">Articles</a> > <?php the_title();?>
        </div>
	   	<div class="title-block">
	      	<h1><?php the_title();?></h1>
	      	<?php if( get_field('sub_heading') ): ?><h2 class="subtitle"><?php the_field('sub_heading'); ?></h2><?php endif; ?>      	
	    </div>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<?php $post_tags = get_the_tags(get_the_ID());?>
		<div class="content-block post-block">
			<?php echo the_content(); ?>
		</div>
		<div class="post-meta-details">
			<div class="post-meta">
				<div class="date">
					<strong>Updated:</strong> <?php echo get_the_date(); ?>
				</div>
				<div class="date">
					<strong>Categories:</strong> <?php echo $category_name[0]->name;?>
				</div>
				<div class="tags">
					<strong>Tags:</strong>
					<?php if ( $post_tags ) {?>
                        <?php foreach( $post_tags as $tag ) {?>
                        	<span>
                       			<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>" style="background:<?php the_field('background_color',$tag->taxonomy . '_' . $tag->term_id); ?>" ><?php echo esc_html( $tag->name ); ?></a>
                       		</span>
                        <?php } ?>
                    <?php } ?>
				</div>
			</div>
			<div class="author-block">
				<?php 
				$author_id = get_the_author_meta('ID');
				$author_field = get_field('designation', 'user_'. $author_id );
				$bio_field = get_field('bio_description', 'user_'. $author_id );
				$profile_url = get_field('profile_link', 'user_'. $author_id );
				$author_des = get_the_author_meta('ID') ;
				?>
				<div class="author-image">
					<a href="<?php echo $profile_url; ?>"><?php echo get_avatar( get_the_author_meta('ID') );?></a>
					<?php //echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
				</div>
				<div class="author-info">
					<a href="<?php echo $profile_url; ?>"><h3><?php echo $author; ?></h3></a>
					<h5 class="designation"><?php echo $author_field;?></h5>
					<div class="bio"><?php echo $bio_field;?></div>
				</div>
			</div>
		</div>
		<?php endwhile; wp_reset_query(); endif;?>
   </div>
</section>


<?php get_footer(); ?>