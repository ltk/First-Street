<?php

// Example vCard widget
class Jake_Graphic_Widget extends WP_Widget {
	function Jake_Graphic_Widget() {
		$widget_ops = array('classname' => 'Jake_Graphic_Widget', 'description' => __('Use this widget to add a featured link with a graphic and description.', 'roots'));
		$this->WP_Widget('Jake_Graphic_Widget', __('Graphic Widget', 'roots'), $widget_ops);
		$this->alt_option_name = 'Jake_Graphic_Widget';

		add_action('save_post', array(&$this, 'flush_widget_cache'));
		add_action('deleted_post', array(&$this, 'flush_widget_cache'));
		add_action('switch_theme', array(&$this, 'flush_widget_cache'));
	}

	function widget($args, $instance) {
	?>
		<i class="graphic-<?php echo $instance['graphic']; ?>"></i>
		<h4 class="main-font"><?php echo $instance['title']; ?></h4>
		<p><?php echo $instance['description']; ?></p>
		<a class="uppercase purple strong" href="<?php echo $instance['link']; ?>" title="Learn More">Learn More ></a>
<?php
	}

	function update($new_instance, $old_instance) {
		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('Jake_Graphic_Widget', 'widget');
	}

	function tjg_is_selected($var, $value) {

	}

	function form($instance) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$decription = isset($instance['decription']) ? esc_attr($instance['decription']) : '';
		$link = isset($instance['link']) ? esc_attr($instance['link']) : '';
		$graphic = isset($instance['graphic']) ? esc_attr($instance['graphic']) : '';
	?>
		<p>
			<label for="title">Title:</label>
			<input class="widefat" id="title" name="title" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="description">Description:</label>
			<input class="widefat" id="description" name="description" type="text" value="<?php echo esc_attr($description); ?>" />
		</p>
		<p>
			<label for="link">Link:</label>
			<input class="widefat" id="link" name="link" type="text" value="<?php echo esc_attr($link); ?>" />
		</p>
		<p>
			<label for="graphic">Capitol</label>
			<input id="Capitol" name="graphic" type="radio" value="capitol" <?php tjg_is_selected('capitol'); ?> />
		</p>
		<p>
			<label for="graphic">Bullhorn</label>
			<input id="Bullhorn" name="graphic" type="radio" value="bullhorn" <?php tjg_is_selected('bullhorn'); ?> />
		</p>
		<p>
			<label for="graphic">Nodes</label>
			<input id="Nodes" name="graphic" type="radio" value="nodes" <?php tjg_is_selected('nodes'); ?> />
		</p>		
	<?php
	}
}
