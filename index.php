<?php get_template_part('header'); ?>
			<main class="l-main">
			<div class="l-main__wrapper">
				<!--ループ開始-->
    			<?php get_template_part('loop','archive'); ?>
        <!-- ループ終了-->
			</div>
			<aside id="sidebar" class="l-sidebar">
				<?php get_template_part('sidebar'); ?>
			</aside>
		</main>
		<footer id="l-blog-container__footer" class="l-contents">
		<?php wp_footer(); ?>
			<small>&copy;mogami74;</small>
		</footer>
	</div> <!--full-wrap-->
	<div class="l-ad-full">
		<p class="c-ad-wrap__sponsored">sponsored link</p>
			<p style="border:1px solid blue;width:320px;height: 100px;">Google AdSense</p>
		</div>
</body>
</html>