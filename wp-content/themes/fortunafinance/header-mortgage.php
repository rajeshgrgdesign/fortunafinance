<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
// Print the <title> tag based on what is being viewed.
    global $page, $paged;
    wp_title( '|', true, 'right' );
// Add the blog name.
    bloginfo( 'name' );
// Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
        echo esc_html( ' | ' . sprintf( __( 'Page %s', 'Podcast Theme' ), max( $paged, $page ) ) );
    ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/040c034aef.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Favicon -->
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">
<!-- Canonical -->    
<link rel="canonical" href="<?php bloginfo('url'); ?>" />
<?php wp_head(); ?>
<script type="text/javascript">
</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M85H586');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M85H586"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <nav class="navbar navbar-inverse mortgage-nav navbar-fixed-top">
        <div class="container-fluid">
            <div class="left-header">
                <?php if( get_field('logo', 'option') ): ?>
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <img class="img-responsive logo" src="<?php the_field('logo', 'option'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    </a>
                <?php endif; ?>
                <?php if( get_field('phone_number_text', 'option') ): ?><div class="phone"><?php the_field('phone_number_text', 'option'); ?></div><?php endif; ?>
            </div>
            <div class="right-header">
                <div class="phone"><span>Need help with your application? Call us now on <strong>+44 (0)1992 503 410</strong></span></div>
            </div>
        </div>
        <!-- /.container -->
    </nav>