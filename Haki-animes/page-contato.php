<?php
/* Template Name: Pagina do Contato */
?>

<!-- PAGE da PAGINAS CONTANTO -->
<?php get_header(); ?><!-- Código Chama a pagina header pro index -->
	
	<!--- Container / area de Conteudo da Pagina --->
	<div id="container">
		
		<!-- Content / Pagina -->
		<div id="content">
			
			<div class="main-page-contato"><!-- Aqui é onde fica o titulo da pagina, ser depois quiser troca, basta muda dentro das span -->
				
				<!-- Title Page -->
				<div id="title-page-contato"><span></span></div>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- LOOP -->

					<!-- Coloca o código da imagem aqui --><!--a href="<--?php the_Permalink(); ?>"><--?php the_post_thumbnail(); ?></a -->
					
					<p><?php the_content(); ?></p>
					
				<?php endwhile; else: ?>
                <?php endif; ?>	
				
			</div>
			
			<div class="publi-baixo"><!-- Publicidade Embaixo-->
      			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('embaixo_publicidade')) : else : ?>  
					<span>Anuncie Aqui</span>
       			<?php endif; ?>  
    		</div>
			
	    </div><!---/ fim content -->

<?php get_sidebar(); ?>

	</div><!--/ Fim Container -->

<?php get_footer(); ?>