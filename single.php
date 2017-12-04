<?php get_template_part('header','single'); ?>
<!--single.php-->
			<main class="l-main">
			<div class="l-main__wrapper">
			<!--ループ開始-->
			<?php get_template_part('loop'); ?>
			<!--ループ終了-->
			</div>
			<aside id="sidebar" class="l-sidebar">
			<?php get_template_part('sidebar'); ?>
			</aside>
		</main>
<?php get_footer(); ?>