<?php 
/*タイムゾーン設定*/
date_default_timezone_set('Asia/Tokyo');
/*テーマサポート*/
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');
/*サイドバー登録*/
add_action('widgets_init',function(){
	register_sidebar(array(
		'name'=>'sidebar1',
		'id'=>'sidebar-1',
		'before_widget' => '<nav id="%1$s" class="widget-cintainer %2$s">',
		'after_widget' => '</nav>',
		'before_title' => '<h3 class="widget-title hide">',
		'after_title' => '</h3>',
	));
});
add_action('wp_enqueue_scripts',function(){
	wp_register_style('app',get_template_directory_uri().'/css/app.css',array(),'20170313','screen');
	wp_enqueue_style('app');
});
