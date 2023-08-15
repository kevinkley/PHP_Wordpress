<?php 
// Código que coloca imagem de fundo no site Dinamica
// Ver como fazer funciona depois no site
add_theme_support( 'custom-background' );

$defaults = array(
   'default-color'          => 'ff0000',
   'default-image'          => get_template_directory_uri() . '/images/background.jpg',
   'default-repeat'         => 'no-repeat',
   'default-position-x'     => 'center',
   'default-attachment'     => 'fixed',
);
add_theme_support( 'custom-background', $defaults );

// Criar depois uma FOTO, ou seja, foto padrão dos autores, ver ser vai funciona depois
add_filter( 'avatar_defaults', 'newgravatar' );
 
function newgravatar ($avatar_defaults) {
$myavatar = get_bloginfo('template_directory') . '/images/gravatar.gif';
$avatar_defaults[$myavatar] = "Haki Animes";
return $avatar_defaults;
}

// Mostra a imagem do post no feed RSS, pesquisa mais depois pra sabe
add_filter('the_content_feed', 'rss_post_thumbnail');
function rss_post_thumbnail($content) {
         global $post;
         if( has_post_thumbnail($post->ID) )
                 $content = '<p>' . get_the_post_thumbnail($post->ID, 'thumbnail') . '</p>' . $content;
         return $content;
}

//---------------------------------------------------------

// Registrar o menu principal do site
require_once('inc/wp_bootstrap_navwalker.php'); register_nav_menus( array( 'primary' => __( 'Menu Principal', 'Haki Animes' ), ) );

// Menu II Topo
register_nav_menus( array( 'links-uteis' => __( 'Menu II Topo', 'Hakianimes' ), ) );
	
// pegar o arquivo marca header
require get_template_directory() . '/inc/marca.php';

// pegar o arquivo metabox.php
require get_template_directory() . '/inc/metabox.php';

// Mostra a Favicon, marca do site padrão ser não houve nenhuma outra
function add_default_favicon() { if ( ! get_option( 'site_icon') ) { echo '<link href="' . get_template_directory_uri() . '/images/icone.png" rel="shortcut icon" />'; } } add_action( 'wp_head', 'add_default_favicon' );
	
// Código que ativa a imagem dinamica no cabeçalho do site, ou seja, banner, capa do site
$defaults = array( 'default-image' => '', 'random-default' => true, 'width' => 1031, 'height' => 281, 'flex-height' => false, 'flex-width' => false, 'default-text-color' => '', 'header-text' => true, 'uploads' => true, 'wp-head-callback'       => '',	'admin-head-callback'    => '', 'admin-preview-callback' => '', ); add_theme_support( 'custom-header', $defaults );

// WIDGETS
if (function_exists('register_sidebar'))
{ 	register_sidebar(array('name' => 'Topo Publicidade', 	'id'   => 'topo_publicidade', 	'description'   => 'Caixa de Publicidades do topo home, categorias, paginas e posts', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>' ));  
	register_sidebar(array('name' => 'Sidebar Publicidade', 'id'   => 'sidebar_publicidade','description'   => 'Caixa de Publicidades da sidebar', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>' )); 
	register_sidebar(array('name' => 'Embaixo Publicidade', 'id'   => 'embaixo_publicidade', 'description'   => 'Caixa de publicidade de baixo dos posts relacionados', 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>', 'before_title'  => '<h4>', 'after_title'   => '</h4>' )); } 

// Imagem Destacada 
add_theme_support('post-thumbnails');
add_image_size( 'medium_large', '768', '0', false ); 
add_image_size( 'medium_large', '768', '0', false ); 
add_image_size( 'mediatura', '250', '350', array( "1", "") ); 
add_image_size( 'miniatura', '140', '190', false ); 
add_image_size( 'relacionados', '150', '180', array( "1", "") ); 
add_image_size( 'images-mini', '100', '70', array( "1", "") ); 
add_image_size( 'news-coo', '290', '180', array( "1", "") ); 
add_image_size( 'news-coo-categoria', '650', '0', array( "1", "") ); 
add_image_size( 'miniatura-pages', '90', '140', array( "1", "") ); 
add_image_size( 'ultimos-posts', '300', '0', array( "1", "") ); 
add_image_size( 'relacionados-newscoo', '150', '120', array( "1", "") ); 

// Código que Tira a palavra Category da URL da categoria // Tira depois e troca pelo plugin ou deixa o código mesmo
add_filter('user_trailingslashit', 'remcat_function'); function remcat_function($link) { return str_replace("/category/", "/", $link); }
add_action('init', 'remcat_flush_rules'); function remcat_flush_rules() { global $wp_rewrite; $wp_rewrite->flush_rules(); }
add_filter('generate_rewrite_rules', 'remcat_rewrite'); function remcat_rewrite($wp_rewrite) { $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name='.$wp_rewrite->preg_index(1).'&paged='.$wp_rewrite->preg_index(2)); $wp_rewrite->rules = $new_rules + $wp_rewrite->rules; }
		
// Modificação da pagina de LOGIN	
add_action('login_head', 'wpmidia_custom_login'); function wpmidia_custom_login() { echo '<link media="all" type="text/css" href="'.get_template_directory_uri().'/login-style.css" rel="stylesheet">'; }
add_filter('login_headerurl', 'wpmidia_custom_wp_login_url'); function wpmidia_custom_wp_login_url() { return home_url(); }
add_filter('login_headertitle', 'wpmidia_custom_wp_login_title'); function wpmidia_custom_wp_login_title() { return get_option('blogname'); }

// Código que faz Outra Single com Css Diferente
 add_filter('single_template', 'check_for_category_single_template'); function check_for_category_single_template( $t ) { foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php"; if($cat->parent) { $cat = get_the_category_by_ID( $cat->parent ); if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php"; } } return $t; } 
 
// Paginação do site sem plugin
 function post_pagination($pages = '', $range = 6) { $showitems = ($range * 4)+1; global $paged; if(empty($paged)) $paged = 1; if($pages == '') { global $wp_query; $pages = $wp_query->max_num_pages; if(!$pages) { $pages = 1; } } if(1 != $pages) { echo "<div class='paginacao'>"; if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class='current'>&laquo;</a>"; if($paged > 6 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>1</a> <span class='current'>...</span>"; for ($i=1; $i <= $pages; $i++) { if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) { echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>"; } } if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<span class='current'>...</span> <a href='".get_pagenum_link($pages)."'>$pages</a>"; if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class='current'>&raquo;</a>"; echo "</div>"; } }

// Leia Mais, Direto de Dentro do Post	
add_filter('the_content_more_link', 'filter_more_link'); function filter_more_link( $link ) { return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '" title="Continue lendo '.get_the_title().'">Continue lendo '.get_the_title().'...</a>'; }

// Pagina Dinamica dos Autores do Site
 function contributors() { global $wpdb; $authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users WHERE display_name <> 'admin' ORDER BY display_name"); foreach($authors as $author) { echo '<div class="autor">'; echo "<a href=\"".get_bloginfo('url')."/?author="; echo $author->ID; echo "\">"; echo get_avatar($author->ID, '150'); echo "</a>"; echo "<a class='name-designer' href=\"".get_bloginfo('url')."/?author="; echo $author->ID; echo "\">"; the_author_meta('display_name', $author->ID); echo "</a>"; echo "</div>"; } }

// Busca do formulario de apenas post 
function SearchFilter($query) { if ($query->is_search) { $query->set('post_type', 'post'); } return $query; } add_filter('pre_get_posts','SearchFilter');

// Limite de Caracteres do texto do titulo
function title_excerpt($maxchars) { $title = get_the_title($post->ID); $title = substr($title,0,$maxchars); echo $title; }

// Campo que aumenta o tamanho do RESUMO do post
function novo_tamanho_do_resumo($length) { return 90; } add_filter('excerpt_length', 'novo_tamanho_do_resumo');
add_post_type_support( 'page', 'excerpt' );

// Abre todos os links de fora do site em uma nova GUIA
function autoblank($text) { $return = str_replace('<a', '<a target="_blank"', $text); return $return; } add_filter('the_content', 'autoblank');

// Revisao de Postagem com um aviso do tipo de problema ao autor
    function custom_status_metabox() { current_user_can ('activate_plugins') ? $dis_able = '' : $dis_able = ' disabled'; 
	global $post; $custom = get_post_custom($post->ID); $status = $custom["_status"][0]; $why = $custom["_why"][0];
    $i = 0;
    $custom_status = array(	'Troca Fansub', 'Adiciona Informações','Adiciona Tags', 'Adiciona Capa', 'Conserta Links', 'Atualiza Episódios', 'Reprovado', );
	
	echo '<div class="misc-pub-section custom"><br />';  echo '<label>Revisão: </label>	<select name="status" id="statuser"'. $dis_able .'>'; echo '<option class="default">Selecione...</option>'; for ($i = 0; $i < count($custom_status); $i++) { if ($status == $custom_status[$i]) { echo '<option value="' . $custom_status[$i] . '" selected="true">' . $custom_status[$i] . '</option>';	} else {	echo '<option value="' . $custom_status[$i] . '">' . $custom_status[$i] . '</option>'; } } echo '</select>';
		echo '<div id="why-wrapper"><label>Motivo: </label><textarea style="width:100%" id="why" name="why" cols="10" rows="5"'. $dis_able .'>'. $custom["_why"][0] .'</textarea></div>';
		echo '<script>var $j = jQuery.noConflict();	$j(function($){	$(document).ready(function () {	var statusatual = $(\'#statuser\').val(); if( statusatual == \'Aprovado\' || statusatual == \'Top\' ) { $(\'#why-wrapper\').hide();	} }) $(\'#statuser\').change(function() { $(\'#why\').val(\'\'); if(this.value == \'Aprovado\' || this.value == \'Top\') { $(\'#why-wrapper\').hide();	} else { $(\'#why-wrapper\').show(); } }); }); </script>'; echo '</div>';	} 
add_action('save_post', 'save_status'); function save_status() { global $post; if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) { return $post->ID; } update_post_meta($post->ID, "_status", $_POST["status"]); update_post_meta($post->ID, "_why", $_POST["why"]); } add_action('admin_head', 'status_css');
function status_css() { echo '<style type="text/css"> .default{font-weight:bold;} .custom{border-top:solid 1px #e5e5e5;} .custom_state {font-size:9px;color:#666;background:#e5e5e5;padding:3px 6px 3px 6px;} .custom_state.fila{background:#e5e5e5;color:#fff;} .custom_state.reprovado{background:#F33;color:#fff;} .custom_state.ortografia{background:#FC3;color:#fff;} .custom_state.formato{background:#FC3;color:#fff;} .custom_state.expandir{background:orange;color:white} .custom_state.aprovado{background:#0C3;color:#333;} .custom_state.top{background:#ffcc00;color:white} </style>'; } add_filter('display_post_states', 'custom_post_state');
function custom_post_state($states) { global $post; $show_custom_state = get_post_meta($post->ID, '_status'); if ($show_custom_state) {	$states[] = __('<span class="custom_state ' . strtolower($show_custom_state[0]) . '">' . $show_custom_state[0] . '</span>'); } return $states; } add_action('post_submitbox_misc_actions', 'custom_status_metabox');

//Remove Informação de Versão do site
remove_action('wp_head', 'wp_generator');

//Leva a imagem sem link e sem nada pro post dela
update_option('image_default_link_type','post');

// Impede que as Aspas fiquei doidas
remove_filter('the_content', 'wptexturize'); 
remove_filter('comment_text', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize'); 

// Corrigi os Erros de Escritas do Português
function fb_mce_external_languages($initArray){ $initArray['spellchecker_languages'] = '+Portuguese=pt, English=en'; return $initArray; } add_filter('tiny_mce_before_init', 'fb_mce_external_languages');

// Breadcrumbs
function custom_breadcrumbs(){

$separator          = '&raquo;';
$breadcrums_id      = 'breadcrumbs';
$breadcrums_class   = 'breadcrumbs';
$home_title         = 'Home';
$custom_taxonomy    = 'product_cat';

global $post,$wp_query;
if ( !is_front_page() ) { echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">'; echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>'; echo '<li class="separator separator-home"> ' . $separator . ' </li>';
if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) { echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>'; } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {	$post_type = get_post_type();
	if($post_type != 'post') { $post_type_object = get_post_type_object($post_type); $post_type_archive = get_post_type_archive_link($post_type); echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>'; echo '<li class="separator"> ' . $separator . ' </li>';	}
	$custom_tax_name = get_queried_object()->name; echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
} else if ( is_single() ) {	$post_type = get_post_type(); if($post_type != 'post') { $post_type_object = get_post_type_object($post_type); $post_type_archive = get_post_type_archive_link($post_type); echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>'; echo '<li class="separator"> ' . $separator . ' </li>';	} $category = get_the_category();
	if(!empty($category)) {	$last_category = end(array_values($category));	$get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');	$cat_parents = explode(',',$get_cat_parents); $cat_display = '';	foreach($cat_parents as $parents) {	$cat_display .= '<li class="item-cat">'.$parents.'</li>'; $cat_display .= '<li class="separator"> ' . $separator . ' </li>';	}}	 
	$taxonomy_exists = taxonomy_exists($custom_taxonomy); if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {	$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );	$cat_id = $taxonomy_terms[0]->term_id;	$cat_nicename   = $taxonomy_terms[0]->slug;	$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);	$cat_name       = $taxonomy_terms[0]->name;}
	if(!empty($last_category)) { echo $cat_display;	echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
    } else if(!empty($cat_id)) { echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>'; echo '<li class="separator"> ' . $separator . ' </li>';	echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
	} else {echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';} 
} else if ( is_category() ) { echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>'; } else if ( is_page() ) {
	if( $post->post_parent ){ $anc = get_post_ancestors( $post->ID ); $anc = array_reverse($anc); foreach ( $anc as $ancestor ) {	$parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>'; $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';	} echo $parents;	echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>'; } else { echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>'; }	  
} else if ( is_tag() ) { $term_id = get_query_var('tag_id'); $taxonomy = 'post_tag';	$args = 'include=' . $term_id; $terms = get_terms( $taxonomy, $args ); $get_term_id    = $terms[0]->term_id; $get_term_slug  = $terms[0]->slug; $get_term_name  = $terms[0]->name; echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
} elseif ( is_day() ) {	echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>'; echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';	echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>'; echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';	echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
} else if ( is_month() ) { echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>'; echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';	echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
} else if ( is_year() ) { echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>'; } else if ( is_author() ) {	global $author;	$userdata = get_userdata( $author ); echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
} else if ( get_query_var('paged') ) { echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>'; } else if ( is_search() ) {	echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>'; } elseif ( is_404() ) {	echo '<li>' . 'Error 404' . '</li>';} echo '</ul>'; }}

// Modifica na Administração a palavra do fim criado com wordpress, bom pra usar em sites de clientes
function admin_footer() { echo 'Criado com <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Design por <a href="http://www.hakianimes.com.br" target="_blank">Kevin Kley</a>'; } add_filter('admin_footer_text', 'admin_footer');

// Data dinamica do footer
function comicpress_copyright() { global $wpdb; $copyright_dates = $wpdb->get_results(" SELECT YEAR(min(post_date_gmt)) AS firstdate, YEAR(max(post_date_gmt)) AS lastdate FROM $wpdb->posts WHERE post_status = 'publish' "); $output = ''; if($copyright_dates) { 
$copyright = "&copy " . $copyright_dates[0]->firstdate; if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) { $copyright .= '-' . $copyright_dates[0]->lastdate;} $output = $copyright;} return $output;}

?>