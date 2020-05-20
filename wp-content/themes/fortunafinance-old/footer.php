<!-- Footer -->
<section id="contact-section">
   <div class="wrap">
      <?php if( get_field('section_heading_rc', 'option') ): ?>
      <h3 class="uppercase"><?php the_field('section_heading_rc', 'option'); ?></h3>
      <?php endif; ?>
      <?php if( get_field('section_text_rc', 'option') ): ?><?php the_field('section_text_rc', 'option'); ?><?php endif; ?>
      <?php if( get_field('contact_button_rc', 'option') ): ?> <a href="#collapse" data-toggle="collapse" class="collapsed btn btn-primary" data-artist-name="" data-target="#contact-form" aria-expanded="false"><?php the_field('contact_button_rc', 'option'); ?></a><?php endif; ?>
   </div>
</section>
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
               <h5><a href="#" data-toggle="collapse" class="collapsed" data-target="#contact-form" aria-expanded="false"><?php the_field('call_to_action_ps', 'option'); ?></a></h5>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<div id="social-proof">
   <div class="footer-wrap">
      <div class="row top-footer">
         <div class="col-lg-4 col-sm-4">
            <?php if( get_field('image_1_sp', 'option') ): ?>
            <img src="<?php the_field('image_1_sp', 'option'); ?>" alt="" class="vouchedfor">
            <?php endif; ?>
         </div>
         <div class="col-lg-4 col-sm-4">
            <?php if( get_field('image_2_sp', 'option') ): ?>
            <img src="<?php the_field('image_2_sp', 'option'); ?>" alt="">
            <?php endif; ?>
         </div>
         <div class="col-lg-4 col-sm-4">
            <?php if( get_field('image_3_sp', 'option') ): ?>
            <img src="<?php the_field('image_3_sp', 'option'); ?>" alt="">
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>
<footer>
   <div class="footer-wrap">
      <?php if ( is_active_sidebar( 'footer_one' ) || is_active_sidebar( 'footer_two' ) || is_active_sidebar( 'footer_three' ) || is_active_sidebar( 'footer_four' ) ) { ?>
      <div class="row top-footer">
         <div class="footer-column footer-one">
            <?php dynamic_sidebar('footer_one'); ?>
         </div>
         <div class="footer-column footer-two">
            <?php dynamic_sidebar('footer_two'); ?>
         </div>
         <div class="footer-column footer-three">
            <?php dynamic_sidebar('footer_three'); ?>
         </div>
         <div class="footer-column footer-four">
            <?php dynamic_sidebar('footer_four'); ?>
         </div>
      </div>
      <?php } ?>
   </div>
</footer>
<div class="copyright">
   <div class="copyright-wrap">
      <div class="row">
         <div class="col-lg-12">
            <?php dynamic_sidebar('copyright_widget'); ?>
         </div>
      </div>
   </div>
</div>
<?php wp_footer(); ?>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32487108-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
  jQuery('.collapse').on('show.bs.collapse', function () {
    jQuery('.collapse.in').each(function(){
        jQuery(this).collapse('hide');
    });
  });
</script>
</body>
</html>
