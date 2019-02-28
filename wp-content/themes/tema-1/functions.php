<?php 
//aqui creo mi menu
if (function_exists('register_nav_menus')) {
	register_nav_menus(array('menu_superior' => 'Menú Principal Superior'));
}


//aqui creo clase para <a> menus
	add_filter('nav_menu_link_attributes', 'clase_menu_superior', 10, 3);

	function clase_menu_superior ($atts, $item, $args){
		$class = 'nav-link';
		$atts['class'] = $class;
		return $atts;
	}
 ?>