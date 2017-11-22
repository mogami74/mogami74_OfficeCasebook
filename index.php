<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
<!--	<link rel="stylesheet" href="<? echo get_stylesheet_directory_uri(); ?>/style.css" />-->
	<style>
		body *{
/*			border:1px solid rgba(0,0,25,0.1); just for testing*/
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
			<ul class="c-breadcrumb">
				<li class="c-site-name"><a href="<?php bloginfo('url'); ?>/">Office<br />事件簿</a></li><li class="c-breadcrumb-item">記事</li><li class="c-breadcrumb-item c-category__item c-tile c-tile__powerpoint">pptx</li><li class="c-breadcrumb-item">記事タイトル30文字を想定すべき</li>
			</ul>
			<p><?php bloginfo('description'); ?></p>
		</header>
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
				<h2>サイドバー</h2>
				<?php dynamic_sidebar('sidebar1'); ?>
				<div class="c-ad-sidebar">
				<!-- 300px ad-->
					<span class="c-ad-wrap__sponsored">sponsored link</span>
					<p style="border:1px solid blue;width:300px;height: 250px;">Google AdSense</p>
				</div>
				<section class="sideWidget widget widget_recent_entries" id="recent-posts-plus-2">
					<h3 class="localHead">Recent Posts</h3>
					<ul>
						<li><a title="今日学んだ関数 SUBSTITUTEで文字を置換する" href="http://tec.74th.net/replace-letters-by-substitute-function/">今日学んだ関数 SUBSTITUTEで文字を置換する</a></li>
						<li><img width="50" height="50" src="http://tec.74th.net/wp-content/uploads/2017/08/170829-0020-120x120.jpg" class="attachment-50x50 size-50x50 wp-post-image" alt="文字色の変更" srcset="http://tec.74th.net/wp-content/uploads/2017/08/170829-0020-120x120.jpg 120w, http://tec.74th.net/wp-content/uploads/2017/08/170829-0020-200x200.jpg 200w" sizes="(max-width: 50px) 100vw, 50px"><a title="会社で使うPPTファイルを見栄え良くあっさりデザインする最短手順" href="http://tec.74th.net/corporate-ppt/">会社で使うPPTファイルを見栄え良くあっさりデザインする最短手順</a></li>
						<li><img width="50" height="50" src="http://tec.74th.net/wp-content/uploads/2017/08/170818-0006-120x120.jpg" class="attachment-50x50 size-50x50 wp-post-image" alt="サンプル表B" srcset="http://tec.74th.net/wp-content/uploads/2017/08/170818-0006-120x120.jpg 120w, http://tec.74th.net/wp-content/uploads/2017/08/170818-0006-200x200.jpg 200w" sizes="(max-width: 50px) 100vw, 50px"><a title="Excel事件簿: VLOOKUP応答不能事件" href="http://tec.74th.net/trouble-case-of-vlookup-no-response/">Excel事件簿: VLOOKUP応答不能事件</a></li>
						<li><img width="50" height="50" src="http://tec.74th.net/wp-content/uploads/2017/08/Judas002517-120x120.jpg" class="attachment-50x50 size-50x50 wp-post-image" alt="重複行削除（Excel）" scale="0"><a title="重複を削除する方法（正規表現またはExcel）" href="http://tec.74th.net/remove-duplicate-rows/">重複を削除する方法（正規表現またはExcel）</a></li>
						<li><a title="Excel事件簿: 消えないゼロの秘密（表示形式ではなく）" href="http://tec.74th.net/trouble-case-of-visible-zero/">Excel事件簿: 消えないゼロの秘密（表示形式ではなく）</a></li>
					</ul>
				</section>
				<section class="sideWidget widget widget_utcw widget_tag_cloud" id="utcw-3">
					<h3 class="localHead">Tag Cloud</h3>
					<div class="utcw-117kiha tagcloud"><a class="tag-link-177 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/_%e3%81%8a%e3%81%99%e3%81%99%e3%82%81/" style="font-size:10px" title="1 topic">!_おすすめ</a> <a class="tag-link-117 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/_%e3%82%8f%e3%81%8b%e3%81%a3%e3%81%9f/" style="font-size:10px" title="1 topic">!_わかった</a> <a class="tag-link-118 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/_%e8%8b%a6%e5%8a%b4%e3%81%97%e3%81%9f/" style="font-size:10px" title="1 topic">!_苦労した</a> <a class="tag-link-64 utcw-tag utcw-tag-adobe" href="http://tec.74th.net/tag/adobe/" style="font-size:10px" title="1 topic">Adobe</a> <a class="tag-link-252 utcw-tag utcw-tag-countifs%e9%96%a2%e6%95%b0" href="http://tec.74th.net/tag/countifs%e9%96%a2%e6%95%b0/" style="font-size:10px" title="1 topic">countifs関数</a> <a class="tag-link-253 utcw-tag utcw-tag-countif%e9%96%a2%e6%95%b0" href="http://tec.74th.net/tag/countif%e9%96%a2%e6%95%b0/" style="font-size:10px" title="1 topic">countif関数</a> <a class="tag-link-595 utcw-tag utcw-tag-dhcp" href="http://tec.74th.net/tag/dhcp/" style="font-size:10px" title="1 topic">DHCP</a> <a class="tag-link-25 utcw-tag utcw-tag-dropbox" href="http://tec.74th.net/tag/dropbox/" style="font-size:12.222222222222px" title="3 topics">dropbox</a> <a class="tag-link-89 utcw-tag utcw-tag-ethernet" href="http://tec.74th.net/tag/ethernet/" style="font-size:10px" title="1 topic">Ethernet</a> <a class="tag-link-71 utcw-tag utcw-tag-excel" href="http://tec.74th.net/tag/excel/" style="font-size:30px" title="19 topics">Excel</a> <a class="tag-link-605 utcw-tag utcw-tag-excel2013" href="http://tec.74th.net/tag/excel2013/" style="font-size:13.333333333333px" title="4 topics">Excel2013</a> <a class="tag-link-3 utcw-tag utcw-tag-hackstips" href="http://tec.74th.net/tag/hackstips/" style="font-size:10px" title="1 topic">Hacks&amp;Tips（コツ）</a> <a class="tag-link-133 utcw-tag utcw-tag-ios" href="http://tec.74th.net/tag/ios/" style="font-size:10px" title="1 topic">iOS</a> <a class="tag-link-134 utcw-tag utcw-tag-ipad" href="http://tec.74th.net/tag/ipad/" style="font-size:11.111111111111px" title="2 topics">iPad</a> <a class="tag-link-88 utcw-tag utcw-tag-lan" href="http://tec.74th.net/tag/lan/" style="font-size:10px" title="1 topic">LAN</a> <a class="tag-link-152 utcw-tag utcw-tag-microsoft" href="http://tec.74th.net/tag/microsoft/" style="font-size:11.111111111111px" title="2 topics">Microsoft</a> <a class="tag-link-92 utcw-tag utcw-tag-office" href="http://tec.74th.net/tag/office/" style="font-size:13.333333333333px" title="4 topics">Office</a> <a class="tag-link-161 utcw-tag utcw-tag-office365" href="http://tec.74th.net/tag/office365/" style="font-size:11.111111111111px" title="2 topics">Office365</a> <a class="tag-link-158 utcw-tag utcw-tag-onedrive" href="http://tec.74th.net/tag/onedrive/" style="font-size:10px" title="1 topic">OneDrive</a> <a class="tag-link-61 utcw-tag utcw-tag-outlook" href="http://tec.74th.net/tag/outlook/" style="font-size:26.666666666667px" title="16 topics">Outlook</a> <a class="tag-link-569 utcw-tag utcw-tag-outlook2013" href="http://tec.74th.net/tag/outlook2013/" style="font-size:17.777777777778px" title="8 topics">Outlook2013</a> <a class="tag-link-163 utcw-tag utcw-tag-pdf" href="http://tec.74th.net/tag/pdf/" style="font-size:11.111111111111px" title="2 topics">PDF</a> <a class="tag-link-91 utcw-tag utcw-tag-powerpoint" href="http://tec.74th.net/tag/powerpoint/" style="font-size:12.222222222222px" title="3 topics">PowerPoint</a> <a class="tag-link-144 utcw-tag utcw-tag-todo%e7%ae%a1%e7%90%86" href="http://tec.74th.net/tag/todo%e7%ae%a1%e7%90%86/" style="font-size:10px" title="1 topic">ToDo管理</a> <a class="tag-link-23 utcw-tag utcw-tag-windows" href="http://tec.74th.net/tag/windows/" style="font-size:14.444444444444px" title="5 topics">windows</a> <a class="tag-link-153 utcw-tag utcw-tag-word" href="http://tec.74th.net/tag/word/" style="font-size:12.222222222222px" title="3 topics">Word</a> <a class="tag-link-579 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%82%a4%e3%83%b3%e3%83%9d%e3%83%bc%e3%83%88%e3%81%95%e3%82%8c%e3%81%9f%e8%a8%98%e4%ba%8b/" style="font-size:10px" title="1 topic">インポートされた記事</a> <a class="tag-link-589 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%82%a6%e3%82%a3%e3%83%b3%e3%83%89%e3%82%a6/" style="font-size:10px" title="1 topic">ウィンドウ</a> <a class="tag-link-614 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%82%ad%e3%83%bc%e3%83%9c%e3%83%bc%e3%83%89%e3%82%b7%e3%83%a7%e3%83%bc%e3%83%88%e3%82%ab%e3%83%83%e3%83%88/" style="font-size:10px" title="1 topic">キーボードショートカット</a> <a class="tag-link-157 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%82%b7%e3%83%a7%e3%83%bc%e3%83%88%e3%82%ab%e3%83%83%e3%83%88%e3%82%ad%e3%83%bc/" style="font-size:10px" title="1 topic">ショートカットキー</a> <a class="tag-link-34 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%82%b9%e3%83%86%e3%83%83%e3%82%ab%e3%83%bc/" style="font-size:10px" title="1 topic">ステッカー</a> <a class="tag-link-29 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%83%88%e3%83%a9%e3%83%83%e3%82%af%e3%83%9d%e3%82%a4%e3%83%b3%e3%83%88/" style="font-size:10px" title="1 topic">トラックポイント</a> <a class="tag-link-221 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%83%88%e3%83%a9%e3%83%96%e3%83%ab/" style="font-size:12.222222222222px" title="3 topics">トラブル</a> <a class="tag-link-600 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%83%95%e3%82%a9%e3%83%ab%e3%83%80/" style="font-size:10px" title="1 topic">フォルダ</a> <a class="tag-link-607 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%83%95%e3%82%a9%e3%83%b3%e3%83%88/" style="font-size:10px" title="1 topic">フォント</a> <a class="tag-link-120 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%83%a1%e3%83%bc%e3%83%ab/" style="font-size:13.333333333333px" title="4 topics">メール</a> <a class="tag-link-594 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%83%ab%e3%83%bc%e3%82%bf%e3%83%bc/" style="font-size:10px" title="1 topic">ルーター</a> <a class="tag-link-613 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e3%83%af%e3%83%bc%e3%82%af%e3%82%b7%e3%83%bc%e3%83%88/" style="font-size:10px" title="1 topic">ワークシート</a> <a class="tag-link-597 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e5%88%86%e9%a1%9e%e9%a0%85%e7%9b%ae/" style="font-size:11.111111111111px" title="2 topics">分類項目</a> <a class="tag-link-611 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e5%90%8d%e5%89%8d%e3%81%ae%e7%ae%a1%e7%90%86/" style="font-size:11.111111111111px" title="2 topics">名前の管理</a> <a class="tag-link-72 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e6%9d%a1%e4%bb%b6%e4%bb%98%e3%81%8d%e6%9b%b8%e5%bc%8f/" style="font-size:11.111111111111px" title="2 topics">条件付き書式</a> <a class="tag-link-650 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e6%ad%a3%e8%a6%8f%e8%a1%a8%e7%8f%be/" style="font-size:10px" title="1 topic">正規表現</a> <a class="tag-link-598 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e9%80%a3%e7%b5%a1%e5%85%88/" style="font-size:11.111111111111px" title="2 topics">連絡先</a> <a class="tag-link-139 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%e9%96%a2%e6%95%b0/" style="font-size:11.111111111111px" title="2 topics">関数</a> <a class="tag-link-147 utcw-tag utcw-tag-" href="http://tec.74th.net/tag/%ef%bc%bboutlook2013%e3%81%b8%e3%81%ae%e9%81%93%ef%bc%bd/" style="font-size:14.444444444444px" title="5 topics">［Outlook2013への道］</a></div>
				</section>
				<section class="sideWidget widget widget_categories" id="categories-2">
					<h3 class="localHead">カテゴリー</h3>
					<ul>
						<li class="cat-item cat-item-32"><a href="http://tec.74th.net/casebook-of-excel/"><p class="c-category__item c-tile c-tile__excel">xlsx</p>Excel事件簿 (22)</a></li>
						<li class="cat-item cat-item-568"><a href="http://tec.74th.net/casebook-of-outlook/">Outlook事件簿 (17)</a></li>
						<li class="cat-item cat-item-30"><a href="http://tec.74th.net/casebook-of-pc/">PC事件簿 (13)</a></li>
						<li class="cat-item cat-item-651"><a href="http://tec.74th.net/casebook-of-power-point/"><p class="c-category__item c-tile c-tile__powerpoint">pptx</p>PowerPoint事件簿 (3)</a></li>
						<li class="cat-item cat-item-31"><a href="http://tec.74th.net/casebook-of-word/"><p class="c-category__item c-tile c-tile__word">docx</p>Word事件簿 (4)</a></li>
						<li class="cat-item cat-item-258"><a href="http://tec.74th.net/etc/">その他 (3)</a></li>
					</ul>
				</section>
				<section class="sideWidget widget widget_meta" id="meta-2">
					<h3 class="localHead">メタ情報</h3>
					<ul>
						<li><?php wp_loginout(); ?></li>
						<li><a href="http://tec.74th.net/feed/">投稿の <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="http://tec.74th.net/comments/feed/">コメントの <abbr title="Really Simple Syndication">RSS</abbr></a></li>
						<li><a href="https://ja.wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
						<li><?php bloginfo('version'); ?></li>
					</ul>
				</section>
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