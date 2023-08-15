<!-- O SINGLE abre os post na pagina do wordpress -->

<?php get_header(); ?>
	
	<!--- Container --->
	<div id="container">
		
		<!-- Content / Single -->
		<div id="content">
		
			<div class="publi-topo"><!-- Publicidade -->
      			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('topo_publicidade')) : else : ?>  
					<div class="anuncie-topo"><span>Anuncie Aqui</span></div>
       			<?php endif; ?>  
    		</div>
		
			<!-- Title Single -->
			<div class="main-category-noticias">
				
				<?php if(have_posts()) : while(have_posts()) : the_post();  ?><!-- LOOP -->
							
						<div id="caixa-informacoes">
							<div class="moldura-dois">
								<div class="author">
									<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '190'); }?>
								</div>
							</div>
						</div>

						<div id="titulo-categoria-noticias"><a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a></div>
						
						<div id="views-categoria-news">
							<div class="post-info">
								<ul><div class="data-news"><?php the_modified_date('j \d\e F \d\e Y'); ?></div><div class="post-autor" ><span>Postado por </span><?php the_author_posts_link(); ?></div><div class="post-coment" ><span>Comentários: </span><?php comments_number('0','1','%'); ?></div></ul>
							</div>		
						</div>
						
						<div id="social-news"><!-- Botões Redes Socias -->
							<div class="face-news"><div class="fb-like" data-href="https://www.facebook.com/Haki-Animes-675869962515703/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>
							<div class="enviar-news"><div class="fb-send" data-href="https://www.facebook.com/Haki-Animes-675869962515703/"></div></div>
							<div id="twitter-news"><span><a href="http://twitter.com/home?status=Acabei de ler <?php the_permalink(); ?>" title="Compartilher no Twitter!" target="_blank">Compartilher no Twitter!</a></span></div>
						</div>
							
						<div id="editar-news-coo"><!-- Editar Post -->
							<span><?php edit_post_link('Editar News Coo', ''); ?></span>
						</div>
						
					<div id="divSpdInText"><!-- Inicio publicidade texto Spider -->
						
						<div class="thumb-news"><!-- Imagem -->
							<a alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
							<?php
								if ( has_post_thumbnail() )
								the_post_thumbnail('news-coo-categoria');
								else
							?>
							</a>
						</div>
						
						<div class="informacoes-categoria-noticias">												
						   <?php the_content(); ?>
						</div>
						
					</div><!-- Fim publicidade texto Spider -->
									
				<?php endwhile; else: ?>
                <?php endif; ?>	

			</div>
		  
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