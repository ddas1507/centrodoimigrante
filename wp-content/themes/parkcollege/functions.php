<?php
	//imagem destacada
	add_theme_support( 'post-thumbnails' );
	
	//menus dinamicos
	function register_menus(){
		register_nav_menus(
			array(
				'main-menu' => __("Main Menu")
			)
		);
	}
	add_action('init', 'register_menus');

	// Post Types
	function attributes_posts(){
		//Campos
		register_post_type('attributes',
			
			array(
				'labels' => array('name' => __('Atributos'),'singular_name' => __('atributo')),
				'public' =>	true,
				'has_archive' => true,
				'menu_icon'	=>	'dashicons-admin-generic',
				'supports'	=>	array('title','page_attributes')
				)
			);
	}
	add_action('init', 'attributes_posts');

	function get_excerpt(){
		$excerpt = get_the_content();
		$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
		$excerpt = strip_shortcodes($excerpt);
		$excerpt = strip_tags($excerpt);
		$excerpt = substr($excerpt, 0, 80);
		$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
		$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
		return $excerpt;
	}

	