<?

function add_theme_scripts() {
  wp_register_style( 'acfstyles', get_template_directory_uri() . '/acfstyles.css', false, '1.0.0' );
  wp_enqueue_style( 'acfstyles' );
}
add_action( 'admin_enqueue_scripts', 'add_theme_scripts' );

/*************************************************************/
/*   Friendly Block Titles                                  */
/***********************************************************/

function my_layout_title($title, $field, $layout, $i) {
	if($value = get_sub_field('layout_title')) {
		return $value;
	} else {
		foreach($layout['sub_fields'] as $sub) {
			if($sub['name'] == 'layout_title') {
				$key = $sub['key'];
				if(array_key_exists($i, $field['value']) && $value = $field['value'][$i][$key])
					return $value;
			}
		}
	}
	return $title;
}
add_filter('acf/fields/flexible_content/layout_title', 'my_layout_title', 10, 4);
