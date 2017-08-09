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


/*
	function adicionandoMenu(){
		add_menu_page(
			'Primeira opção',
			'Minhas Páginas',
			'manage_options',
			'teste-livro',
			'funcao_paginas_admin'
		);

		add_submenu_page(
			'teste-livro',
			'Ferramentas',
			'Minhas Ferramentas',
			'manage_ferramentas',
			'url-ferramentas',
			'conteudo_ferramentas'
		);

		add_submenu_page(
			'teste-livro',
			'FAQ',
			'Fazendo FAQ',
			'manage_options',
			'url-faq',
			'conteudo_faq'
		);
	}

	add_action('admin_menu', 'adicionandoMenu');


	function funcao_paginas_admin(){
		echo 'Conteúdo Principal';
	}

	function conteudo_ferramenas(){
		echo 'Conteúdo Ferramentas';
	}

	function conteudo_faq(){
		echo 'Conteúdo de FAQ';
	}
*/
