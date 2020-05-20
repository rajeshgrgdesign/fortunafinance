<!-- Footer -->
<footer class="mortgage-footer">
    <div class="footer-wrap">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <div class="copyright-block">
                    <?php dynamic_sidebar('copyright_widget'); ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <div class="address-block">
                    <?php dynamic_sidebar('footer_four'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
<script type="text/javascript">
    jQuery('.collapse').on('show.bs.collapse', function () {
        jQuery('.collapse.in').each(function(){
            jQuery(this).collapse('hide');
        });
    });
</script>
</body>
</html>
