<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&larr;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<meta name="description" content="Try not to use more than 15-20 words. With the site clearly described in the first 8-10.">

	<meta name="keywords" content="Comma-separated: keyword1, keyword2, etc. Do NOT force keywords. These words MUST have some density in the site content. Use 8-10.">

	<!-- Make it pretty -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/main.css" type="text/css" media="screen" />

	<!-- Even for Internet Explorer -->
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/ie7.css" type="text/css" media="screen" title="ie7" charset="utf-8">
	<![endif]-->

	<!-- Make it behave -->
	<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.js" type="text/javascript" charset="utf-8">
		// version 1.4.2
	</script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.cookie.js" type="text/javascript" charset="utf-8"></script>

	<!-- Warn IE6 Users -->
	<!--[if LTE IE 6]>
		<link rel="stylesheet" href="http://gatorworks.net/ie6warning/ie6.css" type="text/css" media="screen" title="ie6" charset="utf-8">
		<script src="http://gatorworks.net/ie6warning/ie6warning.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->

	<!-- Feeds & Pingbacks -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>
<body>

