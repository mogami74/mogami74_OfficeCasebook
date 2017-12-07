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
/* ▼ココカラ CSS有効化*/
add_action('wp_enqueue_scripts',function(){
	wp_register_style('app',get_template_directory_uri().'/css/app.css',array(),'20170313','screen');
	wp_enqueue_style('app');
});
/* ▲ココマデ CSS有効化*/
/* ▼ココカラ jquery有効化*/
function my_scripts(){
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','my_scripts');
/* ▲ココマデ jquery有効化*/
/* ▼ココカラ ウィジェット OfficeCasebook Categories */
/**
 * Widget API: 
 */
/**
 * Core class used to implement a Categories widget.
 * @see WP_Widget
 */
class OfficeCasebook_Categories extends WP_Widget {
	/**
	 * Sets up a new Categories widget instance.
	 * @access public
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'officecasebook_categories',
			'description' => 'A list of categories for officecasebook用.' ,
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'officecasebook_widget','OfficeCasebook Categories', $widget_ops );
	}

	/**
	 * Outputs the content for the current Categories widget instance.
	 * @since 2.8.0
	 * @access public
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Categories widget instance.
	 */
	public function widget( $args, $instance ) {
		static $first_dropdown = true;

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? 'OfficeCasebook_Categories'  : $instance['title'], $instance, $this->id_base );

		$c = ! empty( $instance['count'] ) ? '1' : '0';
		$h =  '0';
		$d =  '0';

		echo $args['before_widget'];
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		$cat_args = array(
			'orderby'      => 'name',
			'show_count'   => $c,
			'hierarchical' => $h
		);

?>
		<ul>
<?php
		$cat_args['title_li'] = '';

		/**
		 * Filters the arguments for the Categories widget.
		 *
		 * @since 2.8.0
		 *
		 * @param array $cat_args An array of Categories widget options.
		wp_list_categories( apply_filters( 'widget_categories_args', $cat_args ) );
		 */
			$categories = get_categories();
			foreach($categories as $category){
				echo '<li class="cat-item cat-item-'.$category->cat_ID.'">';
				echo '<a href="'.get_category_link($category->cat_ID).'">';
				echo '<p class="c-category__item c-tile c-tile__'.$category->category_nicename.'">'.$category->category_nicename.'</p>';
				echo $category->name.'('.$category->count.')'.'</a></li>';
			}
?>
		</ul>
<?php

		echo $args['after_widget'];
	}

	/**
	 * Handles updating settings for the current Categories widget instance.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['count'] = !empty($new_instance['count']) ? 1 : 0;

		return $instance;
	}

	/**
	 * Outputs the settings form for the Categories widget.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		//Defaults
		$instance = wp_parse_args( (array) $instance, array( 'title' => '') );
		$title = sanitize_text_field( $instance['title'] );
		$count = isset($instance['count']) ? (bool) $instance['count'] :false;
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>

		<p>
			<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>"<?php checked( $count ); ?> />
			<label for="<?php echo $this->get_field_id('count'); ?>"><?php _e( 'Show post counts' ); ?></label>
		</p>
		<?php
	}
}
add_action('widgets_init',function(){
	register_widget('officecasebook_categories');
});

/*  ▲ココマデ  ウィジェット OfficeCasebook Categories */
/* ▼ココカラ featured image を有効化*/
function twpp_setup_theme() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'twpp_setup_theme' );
/* ▲ココマデ featured image を有効化*/
