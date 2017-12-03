<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
<!--	<link rel="stylesheet" href="<? echo get_stylesheet_directory_uri(); ?>/style.css" />-->
	<style>
		body *{
/*			border:1px solid rgba(0,0,25,0.1); just for testing*/
		}
    #sidebar{
      cursor: pointer;
    }
	</style>
<!--
	<title>Office事件簿 / Trouble case of Microsoft Office</title>
-->
	<?php wp_head(); ?>
</head>
<body>
	<div class="l-ad-full">
		<p class="c-ad-wrap__sponsored">sponsored link</p>
		<p style="border:1px solid blue;width:320px;height: 100px;">Google AdSense</p>
	</div>
	<div id="l-blog-container">
		<header id="l-blog-header" class="l-contents">
			<h1 class="c-breadcrumb">
				<p class="c-site-name"><a href="<?php bloginfo('url'); ?>/">Office<br />事件簿</a></p>
			</h1>
			<p><?php bloginfo('description'); ?></p>
		</header>
