<?php get_header();
$id = get_the_id();
$terms = get_the_terms( $id, 'category' );
$category_name = get_the_category();
$author = get_the_author();
?>

<section id="jumbotron"></section>

<section id="content">
   <div class="inner-wrap">
   	<div class="title-block">
      	<h1><?php the_title();?></h1>
      	<?php if( get_field('sub_heading') ): ?><h2><?php the_field('sub_heading'); ?></h2><?php endif; ?>      	
      </div>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="content-block">
			<?php echo the_content(); ?>
		</div>
		<div class="author-block">
			<div class="author-info">
				<h3><?php echo $author; ?></h3>
				<span class="update-date"><?php the_modified_date('j M Y'); ?></span>
				<a class="article-category" href="<?php foreach ($category_name as $category) {}?><?php echo esc_url(get_category_link($category->term_id));?>"><?php echo $category_name[0]->name;?></a>
			</div>
			<div class="author-image">
				<?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
			</div>
		</div>
		<div class="clearfix"></div>
<?php endwhile; wp_reset_query(); endif;?>
   </div>
</section>


<?php get_footer(); ?>