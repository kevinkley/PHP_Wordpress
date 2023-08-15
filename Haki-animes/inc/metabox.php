<?php
 
// Meta Box, area de novas detalhes da Postagem
add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Caixa de Informações do Anime', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
           		array( 'id'   => 'episodios-volumes',	 'name' => __( 'Episódios & Volumes',         'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'status',		 'name' => __( 'Status', 		      'textdomain' ), 'type' => 'text', ),		
			array( 'id'   => 'estudio',		 'name' => __( 'Estúdio & Mangaká',           'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'lançamento', 		 'name' => __( 'Lançamento', 		      'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'audio', 		 'name' => __( 'Áudio', 		      'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'fansub-scanlator',     'name' => __( 'Fansub & Scanlator',  	      'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'tipo', 		 'name' => __( 'Gênero', 		      'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'blu-ray', 		 'name' => __( 'Blu-ray', 		      'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'tamanho', 		 'name' => __( 'Tamanho', 		      'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'formato', 		 'name' => __( 'Formato', 		      'textdomain' ), 'type' => 'text', ),
			array( 'id'   => 'servidor', 		 'name' => __( 'Servidor de Download',	      'textdomain' ), 'type' => 'text', ),
		
	        array( 'id'   => 'resumo', 'name' => __( 'Sipnose', 'textdomain' ), 'type' => 'textarea', ),
   			array( 'id'   => 'filme' , 'name' => __( 'Observação I  ',   'textdomain' ), 'type' => 'text',     ),
   			array( 'id'   => 'obs2'  , 'name' => __( 'Observação II ',   'textdomain' ), 'type' => 'text',     ),

			   
				/* VÍDEO
                array(
                    'name' => esc_html__( 'Vídeo do Youtube', 'your-prefix' ),
                    'id'   => "{$prefix}oembed",
                    'desc' => esc_html__( 'URL do Vídeo', 'your-prefix' ),
                    'type' => 'oembed',
                ), */
	   ),
	);
	return $meta_boxes; }

?>