				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<section id="post-<?php the_ID(); ?>" <?php post_class('l-article c-entry'); ?> >
					<header class="l-article__header">
						<ul class="c-category">
						<?php 
							$categry = get_the_category();
							for($i=0;$i<count($categry);$i++){
								echo '<li class="c-category__item c-tile c-tile__'.$categry[$i]->slug.'">';
								echo $categry[$i]->category_nicename;
								echo '</li>'; 
							}
							?>
						</ul>
						<h2 class="l-title c-entry__title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<div class="c-entry__date">投稿日: <br /><time pubdate="pubdate"><?php the_time('Y-n-j'); ?></time></div>
						<div class="c-entry__date">最終更新日: <br /><?php the_modified_time('Y-n-j');?></div>
						<div class="c-entry__tag-list">
							<?php the_tags('<span class="c-entry__tag">','</span><span class="c-entry__tag">','</span>'); ?>
            </div>
					</header>
					<div class="l-article__body">
						<?php the_excerpt(); ?>
					</div>
					<footer class="l-article__footer">
					</footer>
				</section>
				<hr>
				<?php endwhile;endif;?>
