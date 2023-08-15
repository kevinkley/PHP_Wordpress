<!-- CATEGORY é o comando pra CATEGORIAS do wordpress -->
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
			
			<!-- Title -->
			<div id="title-category"><span><?php single_cat_title(); ?></span></div>
				
				<div id="search_cat">
					<div id="search-error">
						<?php get_search_form(); ?>
					</div>
				</div>
				
			<div class="main-category">
			
				<div id="primary"></div><!-- Paginação por Letra -->
				<div id="Paginacao"><?php post_pagination();?></div><!-- Paginação Normal -->

				<ul>
					<?php global $query_string;	query_posts( $query_string . "&order=ASC&orderby=title" ); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

					<li>
						<a href="<?php the_Permalink(); ?>" target="_blank" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
						<?php
							if ( has_post_thumbnail() )
							the_post_thumbnail('');
							else
							echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
						?></a>						
						<div id="titulo-categoria">
							<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
						</div>
	
							<!-- Caixa Informaçoes do Post -->
							<div class="informacoes-anime">
								<div class="detalhes-anime">
									<div class="post-info">
										<ul>
											<div class="post-autor" ><span>Uploader: </span><?php the_author_posts_link(); ?></div>
											<div class="post-views" ><span>Views: </span><?php if(function_exists('the_views')) { the_views(); } ?></div>
											<div class="post-coment"><span>Coment: </span><?php comments_number('0','1','%'); ?></div>
										</ul>
										
									</div>	
									
										<h3>Volumes: 	<span><?php echo rwmb_meta('episodios-volumes'); 	?></span></h3> 
										<h3>Mangaká: 	<span><?php echo rwmb_meta('estudio'); 			?></span></h3>						
										<h3>Scanlator:  <span><?php echo rwmb_meta('fansub-scanlator'); 	?></span></h3>										
										<h3>Lançamento: <span><?php echo rwmb_meta('lançamento'); 		?></span></h3>
										<h3>Status:     <span><?php echo rwmb_meta('status'); 			?></span></h3>
										<h3>Gênero:    	<span><?php echo rwmb_meta('tipo');      		?></span></h3>	                                            
								</div>
						
								<div id="editar-post">
									<span><?php edit_post_link('Editar Post', ''); ?></span>
								</div>
							</div>	
			
					</li>
					
					<?php endwhile; else: ?>
						<h1>Nada Encontrado</h1>
                    <?php endif; ?>						
				</ul>
				
				<!-- Paginação das postagens -->
				<div id="Paginacao"><?php post_pagination();?></div><!-- Paginação Normal -->
			</div>
	    </div>

<?php get_sidebar(); ?>

	</div><!--/ Fim Container -->

<?php get_footer(); ?>