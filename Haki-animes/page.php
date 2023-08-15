<?php get_header(); ?>
	
	<!--- Container / area de Conteudo da Pagina --->
	<div id="container">
		
		<!-- Content / Pagina -->
		<div id="content">
			
			<div class="publi-topo"><!-- Publicidade -->
      			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('topo_publicidade')) : else : ?>  
					<div class="anuncie-topo"><span>Anuncie Aqui</span></div>
       			<?php endif; ?>  
    		</div>			
			
			<div class="main-page">
							
				<!-- Title Page -->
				<div id="title-page"><span><?php the_title(); ?></span></div>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- LOOP -->
													
						<div id="editar-news-coo"><!-- Editar Post -->
							<span><?php edit_post_link('Editar Página', ''); ?></span>
						</div>
						
						<div class="informacoes-page">												
						   <?php the_content(); ?>
						</div>
					
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

			<div id="migalhas"><?php custom_breadcrumbs(); ?></div><!-- Migalha de Pão -->

	    </div><!---/ fim content -->

<?php get_sidebar(); ?>

	</div><!--/ Fim Container -->

<?php get_footer(); ?>