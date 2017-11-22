<?php if(have_comments()): ?>
<article id="comments" class="comments">
	<h3>コメント</h3>
	<ul class="comment_list">
		<?php wp_list_comments(); ?>
	</ul>
</article>
<?php endif;?>
<aside id="comment_input" class="comments">
	<?php comment_form(); ?>
</aside>
