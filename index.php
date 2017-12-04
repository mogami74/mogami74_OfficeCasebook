<?php get_template_part('header'); ?>
			<main class="l-main">
			<div class="l-main__wrapper">
				<!--ループ開始-->
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('l-article c-entry'); ?> >
					<header class="l-article__header">
						<ul class="c-category">
						<?php 
							$categry = get_the_category();
							for($i=0;$i<count($categry);$i++){
								echo '<li class="c-category__item c-tile c-tile__powerpoint">';
								echo $categry[$i]->category_nicename;
								echo '</li>'; 
							}
							?>
						</ul>
						<h1 class="l-title c-entry__title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
						<div class="c-entry__date">投稿日: <br /><time pubdate="pubdate"><?php the_time('c'); ?></time></div>
						<div class="c-entry__date">最終更新日: <br />2017-08-30</div>
						<div class="c-entry__tag-list"><span class="c-entry__tag">tag1</span>,<span class="c-entry__tag">tag2</span>,<span class="c-entry__tag">tag3</span></div>
					</header>
					<div class="l-article__body">
						<?php the_content(); ?>
					</div>
					<footer class="l-article__footer">
						<section class="yarpp-related">
							<h3>Related posts:</h3>
							<div class="yarpp-thumbnails-horizontal c-related">
								<a class="yarpp-thumbnail c-related__item" href="http://tec.74th.net/powerpoint-with-movie/" title="動画を埋め込んだPowerPoint">
									<span class="yarpp-thumbnail-default">
										<img src="http://tec.74th.net/wp-content/plugins/yet-another-related-posts-plugin/images/default.png" scale="0">
									</span><br />
									<span class="yarpp-thumbnail-title">動画を埋め込んだPowerPoint
									</span>
								</a>
								<a class="yarpp-thumbnail c-related__item" href="http://tec.74th.net/film-strip-slideshow-powerpoint/" title="#PowerPoint2013 によるフィルムストリップ風スライドショー（サンプルファイルあり）">
									<img width="120" height="120" src="http://tec.74th.net/wp-content/uploads/2015/12/Judas002464-120x120.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="Film strip slideshow" srcset="http://tec.74th.net/wp-content/uploads/2015/12/Judas002464-120x120.jpg 120w, http://tec.74th.net/wp-content/uploads/2015/12/Judas002464-200x200.jpg 200w" sizes="(max-width: 120px) 100vw, 120px"><br />
									<span class="yarpp-thumbnail-title">#PowerPoint2013 によるフィルムストリップ風スライドショー（サンプルファイルあり）</span>
								</a>
							</div>
						</section>
						<section>
							<h3>Social share button</h3>
							<p class="social_share_btn">facebook twitter hatena</p>
							<div class="socialSet c-social-share-btn">
								<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
								<ul style="margin-left:0px;">
									<li class="sb_facebook sb_icon"><a href="http://www.facebook.com/sharer.php?src=bm&amp;u=http://tec.74th.net/corporate-ppt/&amp;t=%E4%BC%9A%E7%A4%BE%E3%81%A7%E4%BD%BF%E3%81%86PPT%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E8%A6%8B%E6%A0%84%E3%81%88%E8%89%AF%E3%81%8F%E3%81%82%E3%81%A3%E3%81%95%E3%82%8A%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%99%E3%82%8B%E6%9C%80%E7%9F%AD%E6%89%8B%E9%A0%86+%7C+Office+%E4%BA%8B%E4%BB%B6%E7%B0%BF" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><span class="vk_icon_w_r_sns_fb icon_sns"></span><span class="sns_txt">Facebook</span></a></li>
									<li class="sb_hatena sb_icon"><a href="http://b.hatena.ne.jp/add?mode=confirm&amp;url=http://tec.74th.net/corporate-ppt/&amp;title=%E4%BC%9A%E7%A4%BE%E3%81%A7%E4%BD%BF%E3%81%86PPT%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E8%A6%8B%E6%A0%84%E3%81%88%E8%89%AF%E3%81%8F%E3%81%82%E3%81%A3%E3%81%95%E3%82%8A%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%99%E3%82%8B%E6%9C%80%E7%9F%AD%E6%89%8B%E9%A0%86+%7C+Office+%E4%BA%8B%E4%BB%B6%E7%B0%BF" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=520');return false;"><span class="vk_icon_w_r_sns_hatena icon_sns"></span><span class="sns_txt">Hatena</span></a></li>
									<li class="sb_twitter sb_icon"><a href="http://twitter.com/intent/tweet?url=http://tec.74th.net/corporate-ppt/&amp;text=%E4%BC%9A%E7%A4%BE%E3%81%A7%E4%BD%BF%E3%81%86PPT%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E8%A6%8B%E6%A0%84%E3%81%88%E8%89%AF%E3%81%8F%E3%81%82%E3%81%A3%E3%81%95%E3%82%8A%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%99%E3%82%8B%E6%9C%80%E7%9F%AD%E6%89%8B%E9%A0%86+%7C+Office+%E4%BA%8B%E4%BB%B6%E7%B0%BF" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><span class="vk_icon_w_r_sns_twitter icon_sns"></span><span class="sns_txt">twitter</span></a></li><li class="sb_google sb_icon"><a href="https://plus.google.com/share?url=http://tec.74th.net/corporate-ppt/&amp;t=%E4%BC%9A%E7%A4%BE%E3%81%A7%E4%BD%BF%E3%81%86PPT%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E8%A6%8B%E6%A0%84%E3%81%88%E8%89%AF%E3%81%8F%E3%81%82%E3%81%A3%E3%81%95%E3%82%8A%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%99%E3%82%8B%E6%9C%80%E7%9F%AD%E6%89%8B%E9%A0%86+%7C+Office+%E4%BA%8B%E4%BB%B6%E7%B0%BF" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><span class="vk_icon_w_r_sns_google icon_sns"></span><span class="sns_txt">Google+</span></a></li>
									<li class="sb_pocket"><span></span><div class="pocket-btn"><iframe width="135" height="22" id="pocket-button-0" frameborder="0" allowtransparency="true" scrolling="NO" src="https://widgets.getpocket.com/v1/button?label=pocket&amp;count=horizontal&amp;v=1&amp;url=http%3A%2F%2Ftec.74th.net%2Fcorporate-ppt%2F&amp;title=%E4%BC%9A%E7%A4%BE%E3%81%A7%E4%BD%BF%E3%81%86PPT%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%82%92%E8%A6%8B%E6%A0%84%E3%81%88%E8%89%AF%E3%81%8F%E3%81%82%E3%81%A3%E3%81%95%E3%82%8A%E3%83%87%E3%82%B6%E3%82%A4%E3%83%B3%E3%81%99%E3%82%8B%E6%9C%80%E7%9F%AD%E6%89%8B%E9%A0%86%20%7C%20Office%20%E4%BA%8B%E4%BB%B6%E7%B0%BF&amp;src=http%3A%2F%2Ftec.74th.net%2Fcorporate-ppt%2F&amp;r=0.5397514058330455" kwframeid="4"></iframe></div>
									<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script></li>
								</ul>
							</div>
						</section>
						<section class="c-related">
							<h3>関連記事</h3>
							<div class="c-related__item">
								<img src="../mogami74_northern/xxx.jpg" alt="" width="120px" height="120px">
								<p class="c-related__title">記事タイトル30文字を想定すべき</p>
							</div>
							<div class="c-related__item">
								<img src="../mogami74_northern/xxx.jpg" alt="" width="120px" height="120px">
								<p class="c-related__title">記事タイトル30文字を想定すべき</p>
							</div>
							<div class="c-related__item">
								<img src="../mogami74_northern/xxx.jpg" alt="" width="120px" height="120px">
								<p class="c-related__title">記事タイトルですよ</p>
							</div>
							<div class="c-related__item">
								<img src="../mogami74_northern/xxx.jpg" alt="" width="120px" height="120px">
								<p class="c-related__title">記事タイトル30文字を想定すべき</p>
							</div>
						</section>
						<section>
							<?php comments_template(); ?>
						</section>
					</footer>
					<?php if(is_single()): ?>
					<nav class="l-article__navi">
						<h3>navigation test</h3>
						
						<div><?php 
							$next_post = get_next_post();
							if(!empty( $next_post )):
								$next_post_title = apply_filters( 'the_title', $next_post->post_title );
								$next_post_category=get_the_category($next_post->ID);//配列
								$next_post_category_slug = $next_post_category[0]->category_nicename;
								?>
								<p class="c-category__item c-tile c-tile__word"><?php echo $next_post_category_slug; ?></p><?php next_post_link('%link','%title'); ?>
							<?php endif; ?>
						</div>
						<div><?php 
							$prev_post = get_previous_post();
							if(!empty( $prev_post )):
								$prev_post_title = apply_filters( 'the_title', $prev_post->post_title );
								$prev_post_category=get_the_category($prev_post->ID);
								$prev_post_category_slug = $prev_post_category[0]->category_nicename;
								?>
								<p class="c-category__item c-tile c-tile__powerpoint"><?php echo $prev_post_category_slug; ?></p>
								<?php previous_post_link('%link','%title'); ?>
							<?php endif; ?>
						</div>
					</nav>
					<?php endif; ?>
				</article>
				<hr>
				<?php endwhile;endif;?>
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