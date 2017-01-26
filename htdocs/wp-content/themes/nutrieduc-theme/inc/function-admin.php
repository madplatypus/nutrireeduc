<?php 

/*

@package nutrieduc-theme
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
		ADMIN PAGE
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

*/


function nutrieduc_add_admin_page(){
	//Gera menu admin do tema Nutri Educ
	//Titulo, Nome do Menu, Tipo do Usuario, Slug, função pra criar a pagina, icone, posição
	add_menu_page("Nutri Educ Theme Options", 'Nutri Educ', 'manage_options','nutrieduc','nutrieduc_theme_create_page', '', 110);

	//Cria o submenu pra configuração do about da Denise
	add_submenu_page('nutrieduc','Nutri Educ Theme Options', 'Sobre Autor','manage_options','nutrieduc', 'nutrieduc_theme_create_page');

	//Cria o submenu onde ela vai colocar links para redes sociais
	add_submenu_page('nutrieduc','Nutrieduc Redes Sociais', 'Redes Sociais', 'manage_options', 'nutrieduc_redesociais', 'nutrieduc_redesociais_pagina');
	

	//Custmização do Sobre Mim
	add_action('admin_init', 'nutrieduc_sobre_autor_section');
	add_action('admin_init', 'nutrieduc_redes_sociais_section');

}




function nutrieduc_sobre_autor_section(){
/*
	==================================================
	Customiza as opções para o menu Sobre o Autor 
	==================================================
*/
	register_setting('nutrieduc-settings-group', 'nome_completo');
	register_setting('nutrieduc-settings-group', 'resumo');


	add_settings_section('nutrieduc-sobreautor','Sobre o Autor', 'nutrieduc_opcoes_sobre', 'nutrieduc');

	add_settings_field('nome-sobreautor','Nome Completo', 'nutrieduc_nomesobre', 'nutrieduc', 'nutrieduc-sobreautor');
	add_settings_field('sobre-autor', 'Resumo Sobre Autor', 'nutrieduc_resumo_autor', 'nutrieduc','nutrieduc-sobreautor');
}

function nutrieduc_redes_sociais_section(){
	/*
	==================================================
	Customiza as opções para o menu Redes Sociais
	==================================================
*/
	register_setting('nutrieduc-redessociais', 'twitter');
	register_setting('nutrieduc-redessociais', 'facebook');
	register_setting('nutrieduc-redessociais', 'linkedin');
	//register_setting('nutrieduc-redessociais', 'Youtube');

	add_settings_section('nutrieduc-social', 'Redes Sociais', 'nutrieduc_menu_redesocial','nutrieduc_redesociais');

	add_settings_field('campo-twitter', 'Twitter', 'nutrieduc_twitter','nutrieduc_redesociais', 'nutrieduc-social');
	add_settings_field('campo-facebook', 'Facebook', 'nutrieduc_facebook','nutrieduc_redesociais', 'nutrieduc-social');
	add_settings_field('campo-linkedin', 'Linkedin', 'nutrieduc_linkedin','nutrieduc_redesociais', 'nutrieduc-social');
	//add_settings_field('youtube', 'Youtube', 'nutrieduc_youtube','nutrieduc_redesociais', 'nutrieduc-social');

}

function nutrieduc_linkedin(){
	$linkedin = esc_attr( get_option( 'linkedin' ) );
	echo '<input type="text" name="linkedin" value="'. $linkedin.'" placeholder="Linkedin">';
}

function nutrieduc_facebook(){
	$facebook = esc_attr( get_option( 'facebook' ) );
	echo '<input type="text" name="facebook" value="'. $facebook.'" placeholder="Facebook">';

}

function nutrieduc_twitter(){
	$twitter = esc_attr( get_option( 'twitter' ) );
	echo '<input type="text" name="twitter" value="'. $twitter.'" placeholder="Twitter">';


}

function nutrieduc_menu_redesocial(){

}

function nutrieduc_resumo_autor(){
	$resumo_autor = esc_attr( get_option( 'resumo' ) );
	echo '<textarea name="resumo" cols="100" rows="10">'.$resumo_autor.'</textarea>';
}
function nutrieduc_nomesobre(){
	$nome_completo = esc_attr( get_option( 'nome_completo' ) );
	echo '<input type="text" name="nome_completo" value="'. $nome_completo.'" placeholder="Nome Completo">';
}
function nutrieduc_opcoes_sobre(){
	

}

                          
/*
	==================================================
	Gera as Sub Paginas
	==================================================
*/
add_action('admin_menu', 'nutrieduc_add_admin_page' );

function nutrieduc_theme_create_page(){
	require_once( get_template_directory() . '/inc/templates/configuracoes_sobre.php');


}
function nutrieduc_redesociais_pagina(){
	require_once( get_template_directory() . '/inc/templates/configuracoes_template.php');
}