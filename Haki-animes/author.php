<!-- CATEGORY do membro individual de cada autor -->
<?php get_header(); ?>
	
	<!--- Container --->
	<div id="container">

		<!-- Content -->
		<div id="content">
			
			<div class="publi-topo"><!-- Publicidade -->
      			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('topo_publicidade')) : else : ?>  
					<div class="anuncie-topo"><span>Anúncie Aqui</span></div>
       			<?php endif; ?>  
    		</div>
			
			<!-- Title Category -->
			<div id="title-category-autor"><span><?php the_author_posts_link(); ?></span></div>
						
			<div class="main-category">
				
				<div id="primary"></div><!-- Paginação por Letra -->
				<div id="Paginacao"><?php post_pagination();?></div><!-- Paginação Normal -->

				<ul>
					<!--  Não mostra aqui os posts da categoria news coo, pega a id e excluir -->
					<?php global $query_string;	query_posts( $query_string . "&order=ASC&orderby=title&cat=-10" ); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<li>
						<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><?php the_post_thumbnail(); ?></a>
						
						<div id="titulo-categoria">
							<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><h1><?php the_title(); ?></h1></a>
						</div>
	
							<!-- Caixa Informaçoes do Post -->
							<div class="informacoes-anime">
								<div class="detalhes-anime">
									<div class="post-info">
										<ul>
											<div class="post-autor" ><span>Uploader: </span><?php the_author_posts_link(); ?></div>
											<div class="post-views" ><span>Views: </span><?php if(function_exists('the_views')) { the_views(); } ?></div>
											<div class="post-coment" ><span>Coment: </span><?php comments_number('0','1','%'); ?></div>
										</ul>
										
									</div>	
									
										<h4>Episódios: 	<span><?php echo rwmb_meta('episodios-volumes'); 	?></span></h4> 
										<h4>Áudio: 	   	<span><?php echo rwmb_meta('audio');     			?></span></h4> 
										<h3>Estúdio: 	<span><?php echo rwmb_meta('lançamento'); 			?></span></h3>
										<h3>Fansub:     <span><?php echo rwmb_meta('fansub-scanlator'); 	?></span></h3>										
										<h3>Lançamento: <span><?php echo rwmb_meta('lançamento'); 			?></span></h3>
										<h3>Status:     <span><?php echo rwmb_meta('status'); 				?></span></h3>
										<h3>Gênero:    	<span><?php echo rwmb_meta('tipo');      			?></span></h3>                                                             
								</div>
							</div>	
			
					</li>
					
					<?php endwhile; else: ?>
						<h2>Nada encontrando</h2>
                    <?php endif; ?>						
				</ul>
				
				<!-- Paginação das postagens -->
				<div id="Paginacao"><?php post_pagination();?></div><!-- Paginação Normal -->
			</div>
	    </div>

<?php get_sidebar(); ?>

	</div><!--/ Fim Container -->

<?php get_footer(); ?>