<!-- Footer -->
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
