<!--header-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
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
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- OfficeCasebook Responsive -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-6797100308681073"
         data-ad-slot="7596323228"
         data-ad-format="auto"></ins>
    <script>
    jQuery(document).ready(function(){(adsbygoogle = window.adsbygoogle || []).push({});});
    </script>
  </div>
	<div id="l-blog-container">
		<header id="l-blog-header" class="l-contents">
			<ul class="c-breadcrumb">
				<li class="c-site-name"><a href="<?php bloginfo('url'); ?>/">Office<br />事件簿</a></li>
			</ul>
			<p><?php bloginfo('description'); ?></p>
		</header>
