<?php
/**
 * The Header for our theme
 * See partials/header/ for all template files used in the header
 * You can copy any template file and add to your child theme for modifications
 * Just make sure to keep the same path structure.
 *
 * See framework/header/actions.php for all actions attached to your header hooks.
 *
 * @package		Total
 * @subpackage	Templates
 * @author		Alexander Clarke
 * @copyright	Copyright (c) 2014, Symple Workz LLC
 * @link		http://www.wpexplorer.com
 * @since		Total 1.0.0
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>jQuery('#jquery-ui-theme-css').remove();</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8501777-4', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TMM47K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TMM47K');</script>
<!-- End Google Tag Manager -->

</head>

<!-- Begin Body -->
<body <?php body_class(); ?>>


<div id="outer-wrap" class="clr">

	<?php
	// Wrap before hook
	wpex_hook_wrap_before(); ?>

	<div id="wrap" class="clr">

		<?php
		// Header top hook
		wpex_hook_wrap_top(); ?>
	
		<?php
		// Header layout - see @ partials/header/header-layout.php
		wpex_header_layout(); ?>
		
		<?php
		// Main before hook
		wpex_hook_main_before(); ?>
	
		<div id="main" class="site-main clr">
	
			<?php
			// Main top hook
			wpex_hook_main_top(); ?>


