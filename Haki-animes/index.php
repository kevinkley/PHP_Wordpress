<?php get_header(); ?><!-- Código Chama a pagina header pro index -->

	<!--- Container / area de Conteudo do site --->
	<div id="container">
	
	<!-- Content -->
	<div id="content">
						
		<div class="publi-topo">
      		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('topo_publicidade')) : else : ?>  
			<div class="anuncie-topo"><span>Anúncie Aqui</span></div>
       		<?php endif; ?>  
    	</div>
			
	<!-- Nome Lançamentos da Semana -->
	<div id="lancamentos"><span>lançamentos no site</span></div>
	
		<!-- Titulo ultimos Adicionados -->
		<div class="title-home-cat"><span>últimos adicionados</span></div>

		<!-- ULTIMOS POSTS -->
		<div id="ultimos-posts">

				<!-- ULTIMOS POST GERAL -->
				<div class="ultimos-post-geral">

					<?php query_posts("category_name=&showposts=1&cat=-9"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="ultimos-post">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( '' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
																
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?><div class="Obs-extra"><?php echo rwmb_meta('filme'); ?></div><div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div></div>

						</div>					

					<?php endwhile; else: ?>
					<?php endif; ?>

				</div><!-- FIM ULTIMOS POST -->
		
				<!-- LISTA ULTIMOS POST -->
				<div class="list-ultimos">
					<ul>
		
						<?php query_posts("category_name=&offset=1&showposts=9&cat=-9"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
											
							<li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><h2><?php the_title(); ?></h2></a>
	
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>

							</li>
												
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
					
				</div><!-- FIM LISTA ULTIMOS POST -->
			</div><!-- FIM ULTIMOS POST -->
			
<!-- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -- NEWS COO -->			
		
		<!-- Titulo News Coo -->
		<div class="title-home-cat"><span>news coo</span></div>
		
		<!-- NEWS COO -->
		<div id="news">

				<!-- NEWS COO POST -->
				<div class="news-post">
		
					<?php query_posts ("category_name=news-coo&showposts=1"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="post-news">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'news-coo' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Data -->
								<div class="data-news"><?php the_modified_date('j \d\e F \d\e Y'); ?></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
								
								<!-- Texto -->
								<div class="sipnose"><?php the_excerpt(); ?></div>

						</div>					
				
					<?php endwhile; else: ?>
						<div class="sem-conteudo"><p>Ops! sem parece que estámos sem noticiais por enquanto! Aguarde mais um pouco.</p></div>
					<?php endif; ?>
						
				</div><!-- FIM NEWS COO POST -->

				<!-- LISTA NEWS COO POST -->
				<div class="list-news">
					<ul>
		
						<?php query_posts("category_name=news-coo&offset=1&showposts=8"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
			
						   <li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'news-coo' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php title_excerpt(62); ?></h2></a>
	
								<!-- Data -->
								<div class="data-news"><?php the_modified_date('j \d\e F \d\e Y'); ?></div>						  
						  </li>
						   	
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
				</div><!-- FIM LISTA NEWS COO POST -->
			</div><!-- FIM NEWS COO -->
				
<!-- ANIMES LEGENDADOS -- ANIMES LEGENDADOS -- ANIMES LEGENDADOS -- ANIMES LEGENDADOS -- ANIMES LEGENDADOS -- ANIMES LEGENDADOS -- ANIMES LEGENDADOS -- ANIMES LEGENDADOS -->
			
		<!-- Titulo Animes Legendados -->
		<div class="title-home-cat"><span>animes legendados</span></div>
		
		<!-- ANIMES LEGENDADOS -->
		<div id="news">

				<!-- ANIMES LEGENDADOS -->
				<div class="news-post">
		
					<?php query_posts ("category_name=animes-legendados&showposts=1"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="posts-animes">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
																
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?></div>
								<div class="Obs-extra"><?php echo rwmb_meta('filme'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div>

						</div>					
				
					<?php endwhile; else: ?>
						<div class="sem-conteudo"><p>Ops! Sem Animes Legendados! Aguarde mais um pouco.</p></div>

					<?php endif; ?>
						
				</div><!-- FIM ANIMES LEGENDADOS -->

				<!-- LISTA ANIMES LEGENDADOS -->
				<div class="list-cat-animes">
					<ul>
		
						<?php query_posts("category_name=animes-legendados&offset=1&showposts=8"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
			
						   <li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php title_excerpt(50);?></h2></a>
	
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
							
							</li>
						   	
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
				</div><!-- FIM LISTA ANIMES LEGENDADOS -->
			</div><!-- FIM ANIMES LEGENDADOS -->

<!-- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- MANGÁS -- -->			
		
		<!-- Titulo Mangás -->
		<div class="title-home-cat"><span>mangás</span></div>
		
		<!-- MANGÁS -->
		<div id="news">

				<!-- MANGÁS -->
				<div class="news-post">
		
					<?php query_posts ("category_name=mangás&showposts=1"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="posts-animes">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
																
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?></div>
								<div class="Obs-extra"><?php echo rwmb_meta('filme'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div>

						</div>					
				
					<?php endwhile; else: ?>
						<div class="sem-conteudo"><p>Ops! Sem Mangás por enquanto! Aguarde mais um pouco.</p></div>
					<?php endif; ?>
						
				</div><!-- FIM MANGÁS -->

				<!-- LISTA MANGÁS -->
				<div class="list-cat-animes">
					<ul>
		
						<?php query_posts("category_name=mangás&offset=1&showposts=8"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
			
						   <li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php title_excerpt(50);?></h2></a>
	
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
							
							</li>
						   	
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
				</div><!-- FIM LISTA MANGÁS -->
			</div><!-- FIM MANGÁS -->
			
<!-- ANIMES DUBLADOS -- ANIMES DUBLADOS -- ANIMES DUBLADOS -- ANIMES DUBLADOS -- ANIMES DUBLADOS -- ANIMES DUBLADOS -- ANIMES DUBLADOS -- ANIMES DUBLADOS -->			

		<!-- Titulo Animes Dublados -->
		<div class="title-home-cat"><span>animes dublados</span></div>
		
		<!-- ANIMES DUBLADOS -->
		<div id="news">

				<!-- ANIMES DUBLADOS -->
				<div class="news-post">
		
					<?php query_posts ("category_name=animes-dublados&showposts=1"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="posts-animes">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
								
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?></div>
								<div class="Obs-extra"><?php echo rwmb_meta('filme'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div>
						</div>					
				
					<?php endwhile; else: ?>	
						<div class="sem-conteudo"><p>Ops! Sem Animes Dublados no momento! Aguarde mais um pouco.</p></div>
					<?php endif; ?>
						
				</div><!-- FIM ANIMES DUBLADOS -->

				<!-- LISTA ANIMES DUBLADOS -->
				<div class="list-cat-animes">
					<ul>
		
						<?php query_posts("category_name=animes-dublados&offset=1&showposts=8"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
			
						   <li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php title_excerpt(50);?></h2></a>
	
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
							
							</li>
						   	
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
				</div><!-- FIM LISTA ANIMES DUBLADOS -->
			</div><!-- FIM ANIMES DUBLADOS -->

<!-- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -- FILMES -->			
			
		<!-- Titulo Filmes -->
		<div class="title-home-cat"><span>filmes</span></div>
		
		<!-- FILMES -->
		<div id="news">
				
				<!-- FILMES -->
				<div class="news-post">
		
					<?php query_posts ("category_name=filmes&showposts=1"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="posts-animes">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
								
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?></div>
								<div class="Obs-extra"><?php echo rwmb_meta('filme'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div>
						</div>					
				
					<?php endwhile; else: ?>
						<div class="sem-conteudo"><p>Ops! Sem Filmes no momento! Aguarde mais um pouco.</p></div>
					<?php endif; ?>
						
				</div><!-- FIM FILMES -->

				<!-- LISTA FILMES -->
				<div class="list-cat-animes">
					<ul>
		
						<?php query_posts("category_name=filmes&offset=1&showposts=8"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
			
						   <li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php title_excerpt(50);?></h2></a>
	
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
							
							</li>
						   	
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
				</div><!-- FIM LISTA FILMES -->
			</div><!-- FIM FILMES -->

<!-- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -- OVAS -->			
			
		<!-- Titulo Ovas -->
		<div class="title-home-cat"><span>ovas</span></div>
		
		<!-- OVAS -->
		<div id="news">
				
				<!-- OVAS -->
				<div class="news-post">
		
					<?php query_posts ("category_name=ovas&showposts=1"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="posts-animes">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
								
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?></div>
								<div class="Obs-extra"><?php echo rwmb_meta('filme'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div>

						</div>					
				
					<?php endwhile; else: ?>
						<div class="sem-conteudo"><p>Ops! Estamos sem Ovas/Onas no momento! Aguarde mais um pouco.</p></div>
					<?php endif; ?>
						
				</div><!-- FIM OVAS -->

				<!-- LISTA OVAS -->
				<div class="list-cat-animes">
					<ul>
		
						<?php query_posts("category_name=ovas&offset=1&showposts=8"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
			
						   <li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php title_excerpt(50);?></h2></a>
	
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
							
							</li>
						   	
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
				</div><!-- FIM LISTA OVAS -->
			</div><!-- FIM OVAS -->
			
<!-- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -- LIVE ACTIONS -->
			
		<!-- LIVE ACTIONS -->
		<div id="live-actions">
		
			<!-- Titulo Animes Legendados -->
			<div class="title-live-act-doramas"><span>live actions</span></div>
			
				<!-- LIVE ACTIONS GERAL -->
				<div class="live-actions-geral">

					<?php query_posts("category_name=live-actions&showposts=1&cat=-28"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

						<div class="live-act-doramas">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( '' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
								
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('filme'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div>

						</div>					

					<?php endwhile; else: ?>
						<div class="sem-conteudo"><p>Ops! Sem Live Actions por enquanto!</p></div>
					<?php endif; ?>

				</div><!-- FIM LIVE ACTIONS -->

				<!-- LISTA LIVE ACTIONS -->
				<div class="list-live-act-doramas">
					<ul>
		
						<?php query_posts("category_name=live-actions&offset=1&showposts=8&cat=-28"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
											
							<li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php the_title(); ?></h2></a>
	
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>				  
							</li>
												
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
					
				</div><!-- FIM LISTA LIVE ACTIONS -->
		</div><!-- FIM LIVE ACTIONS -->
			
<!-- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -- DORAMAS -->
			
		<!-- DORAMAS -->
		<div id="doramas">
		
			<!-- Titulo Doramas -->
			<div class="title-live-act-doramas"><span>doramas</span></div>
			
				<!-- DORAMAS GERAL -->
				<div class="doramas-geral">

					<?php query_posts("category_name=doramas&showposts=1&cat=-28"); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- Código que criar o LOOP das postagens no wordpress -->

						<div class="live-act-doramas">
								
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( '' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a>
								
								<!-- Status e autor -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>
								
								<!-- Texto -->
								<div class="sipnose"><?php echo rwmb_meta('resumo'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('filme'); ?></div>
								<div class="Obs-extra2"><?php echo rwmb_meta('obs2'); ?></div>

						</div>					

					<?php endwhile; else: ?>
						<div class="sem-conteudo"><p>Ops! Sem Doramas, Aguarde!</p></div>
					<?php endif; ?>

				</div><!-- FIM DORAMAS -->

				<!-- LISTA DORAMAS -->
				<div class="list-live-act-doramas">
					<ul>
		
						<?php query_posts("category_name=doramas&offset=1&showposts=8&cat=-28"); ?>
						<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!--/ CODIGO PRA ATIVA A PAGINA A PEGA AS POSTAGENS -->				
											
							<li>
								<!-- Imagem -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
								<?php
									if ( has_post_thumbnail() )
									the_post_thumbnail( 'images-mini' );
									else
									echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa-pequeno.jpg" />';
								?></a>
								
								<!-- Titulo -->
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h2><?php the_title(); ?></h2></a>
	
								<!-- Data -->
								<div class="status-home">Status: <span><?php echo rwmb_meta('status'); ?></span></div><div class="post-autor" >Postado por <span><?php the_author_posts_link(); ?></span></div>				  
							
							</li>
				
						<?php endwhile; else: ?>
						<?php endif; ?>				
																		   
					</ul>
					
				</div><!-- FIM LISTA DORAMAS -->
		</div><!-- FIM DORAMAS -->
	</div><!---/ fim content -->

<?php get_sidebar(); ?>

	</div><!--/ Fim Container -->

<?php get_footer(); ?>