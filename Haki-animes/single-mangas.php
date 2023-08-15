<!-- O SINGLE abre os post na pagina do wordpress -->

<?php get_header(); ?>
	
	<!--- Container --->
	<div id="container">
		
		<!-- Content / Single -->
		<div id="content">
		
			<div class="publi-topo"><!-- Publicidade Topo -->
      			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('topo_publicidade')) : else : ?>  
					<div class="anuncie-topo"><span>Anuncie Aqui</span></div>
       			<?php endif; ?>  
    		</div>
				
		<!-- Title Single -->
		<div id="title-single"><?php custom_breadcrumbs(); ?></div>
						
			<div class="main-single">
					
				<?php if(have_posts()) : while(have_posts()) : the_post();  ?><!-- LOOP -->

				<div id="imagem-thumbnail">
					<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
					<?php
						if ( has_post_thumbnail() )
						the_post_thumbnail('mediatura');
						else
						echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
					?></a>
				
					<!-- Caixa Informaçoes do Post -->
					<div class="caixa-meta-inf">
						<div class="caixa-info">	
							<div class="post-info">
								<ul>
									<div class="post-autor" ><span>Uploader: </span><?php the_author_posts_link(); ?></div>
									<div class="post-views" ><span>Views: </span><?php if(function_exists('the_views')) { the_views(); } ?></div>
									<div class="post-coment" ><span>Coment: </span><?php comments_number('0','1','%'); ?></div>
								</ul>
							</div>	
							
<div class="episo-status"><h4>Volumes: <span><?php echo rwmb_meta('episodios-volumes');  ?></span></h4>	<h2>Status: <span><?php echo rwmb_meta('status'); ?></span></h2></div>
<div class="audio-fans"><h4>Scanlator:<span><?php echo rwmb_meta('fansub-scanlator');?></span></h4><h2>Lançamento:<span><?php echo rwmb_meta('lançamento'); ?></span></h2></div>
<div class="estu-ano"><h4>Mangaká: <span><?php echo rwmb_meta('estudio'); ?></span></h4></div>						
<div class="genero"><h4>Gênero: <span><?php echo rwmb_meta('tipo'); ?></span></h4></div>
</div>	

<div class="sipnose"><h4>Sipnose &raquo;</h4> <?php echo rwmb_meta('resumo'); ?></div>
<div class="filme"><?php echo rwmb_meta('filme'); ?></div>
<div class="filme"><?php echo rwmb_meta('obs2'); ?></div>
					</div>					
				</div>
				
					<div class="class-episodio">
						<div id="votos"><!-- Votos do Site -->
							<div id="pd_rating_holder_8487654"></div>
							<script type="text/javascript"> PDRTJS_settings_8487654 = { "id" : "8487654", "unique_id" : "<?php the_ID(); ?>", "title" : "", "permalink" : "" }; (function(d,c,j){if(!document.getElementById(j)){var pd=d.createElement(c),s;pd.id=j;pd.src=('https:'==document.location.protocol)?'https://polldaddy.com/js/rating/rating.js':'http://i0.poll.fm/js/rating/rating.js';s=document.getElementsByTagName(c)[0];s.parentNode.insertBefore(pd,s);}}(document,'script','pd-rating-js')); </script>
						</div>					
						<h1>Volumes</h1>
						<div class="servidor"><h2>Servidor: <span><?php echo rwmb_meta('servidor');   ?></span></h2></div>						
					</div>
					
					<div class="volumes_link">
						<?php the_content();  ?>
					</div>
					
					<!-- Paginação dentro do Post -->
					<!--?php wp_link_pages($args); ?><!-- COLOCA DEPOIS DE 100 EPISODIOS -->
					
					<?php endwhile; else: ?>
					<p>Nada Encontrado</p>
					<?php endif; ?>	
			</div>
			
			<div class="links_quebrado">Links Quebrados? Avise-nos!</div>
<a href="http://hakianimes.com.br/resolve-o-limite-do-mega" target="_blank" alt="Clique aqui e veja como resolve o limite de uso do MEGA" title="Clique aqui e veja como resolve o limite de uso do MEGA"><div class="limite_mega">Problemas com Limite no Mega? Veja Aqui como Resolve.
</div></a>

			<!-- Post Relacionados -->
			<div class="text-Relac"><h3>Veja Também!</h3></div>
			<div class="relacionados">
				
			<?php
			$backup = $post;
			$tags = wp_get_post_tags($post->ID);
			echo "<div>";
			$tagIDs = array();
			if ($tags)
			{
			$tagcount = count($tags);
			for ($i = 0; $i < $tagcount; $i++) {
			$tagIDs[$i] = $tags[$i]->term_id;
			}
			$args=array(
			'tag__in' => $tagIDs,
			'post__not_in' => array($post->ID),
			'showposts'=>20,
			'caller_get_posts'=>1
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() )
			{
			echo "<ul>";
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
			
			<div class="box-relacionado <?php if($count == 4) echo "lest" ?>">
			<!-- Titulo --><li><a href="<?php the_permalink() ?>" rel="<?php echo get_the_title()?>" title="<?php the_title_attribute(); ?> &raquo; Categoria: <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>"><?php the_title(); ?></a></li>
			<!-- Image --><a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; Categoria: <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
			<?php
			if ( has_post_thumbnail() )
			the_post_thumbnail('');
			else
			echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
			?></a>
			<!-- Ir Para --><li><a href="<?php the_permalink() ?>" rel="<?php echo get_the_title()?>" title="<?php the_title_attribute(); ?> // Categoria: <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>">Ir para a Página</a></li>
			</div>                        <?php endwhile;
			echo "</ul>";
			}
			} else echo "<span>Nenhum Anime Relacionado</span>";
			$post = $backup;  // copy it back
			wp_reset_query(); // to use the original query again
			echo "</div>";
			?>
			
			</div><!-- Fim Relacionados-->
		  	
			<div class="publi-baixo"><!-- Publicidade Embaixo-->
      			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('embaixo_publicidade')) : else : ?>  
					<span>Anuncie Aqui</span>
       			<?php endif; ?>  
    		</div>

			<!-- Comentários do Site -->
			<?php include_once("coment.php"); ?>
		  
	</div><!---/ fim content -->

<?php get_sidebar(); ?>

	</div><!--/ Fim Container -->

<?php get_footer(); ?>