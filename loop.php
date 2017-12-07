				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('l-article c-entry'); ?> >
					<header class="l-article__header">
						<ul class="c-category">
						<?php 
							$categry = get_the_category();
							for($i=0;$i<count($categry);$i++){
								echo '<li class="c-category__item c-tile c-tile__'.$categry[$i]->category_nicename.'">';
								echo $categry[$i]->category_nicename;
								echo '</li>'; 
							}
							?>
						</ul>
						<h1 class="l-title c-entry__title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
						<div class="c-entry__date">投稿日: <br /><time pubdate="pubdate"><?php the_time('Y-n-j'); ?></time></div>
						<div class="c-entry__date">最終更新日: <br /><?php the_modified_time('Y-n-j');?></div>
						<div class="c-entry__tag-list">
							<?php the_tags('<span class="c-entry__tag">','</span><span class="c-entry__tag">','</span>'); ?>
						</div>
					</header>
					<div class="l-article__body">
						<?php the_content(); ?>
					</div>
					<footer class="l-article__footer">
						<section>
							<?php comments_template(); ?>
						</section>
					</footer>
					<?php if(is_single()): ?>
					<nav class="l-article__navi">
						<h3>navigation</h3>
						
						<div><?php 
							$next_post = get_next_post();
							if(!empty( $next_post )):
								$next_post_title = apply_filters( 'the_title', $next_post->post_title );
								$next_post_category=get_the_category($next_post->ID);//配列
								$next_post_category_slug = $next_post_category[0]->category_nicename;
								?>
								<p class="c-category__item c-tile c-tile__<?php echo $next_post_category_slug; ?>"><?php echo $next_post_category_slug; ?></p><?php next_post_link('%link','%title'); ?>
							<?php endif; ?>
						</div>
						<div><?php 
							$prev_post = get_previous_post();
							if(!empty( $prev_post )):
								$prev_post_title = apply_filters( 'the_title', $prev_post->post_title );
								$prev_post_category=get_the_category($prev_post->ID);
								$prev_post_category_slug = $prev_post_category[0]->category_nicename;
								?>
								<p class="c-category__item c-tile c-tile__<?php echo $prev_post_category_slug; ?>"><?php echo $prev_post_category_slug; ?></p>
								<?php previous_post_link('%link','%title'); ?>
							<?php endif; ?>
						</div>
					</nav>
					<?php endif; ?>
				</article>
				<hr>
				<?php endwhile;endif;?>
