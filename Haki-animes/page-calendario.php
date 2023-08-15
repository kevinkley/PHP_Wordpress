<?php
/* Template Name: Pagina Calendário */
?>

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
											
<!------------------------------------------------- INICIO DIAS DA SEMANA CALENDÁRIO ------------------------------------------------------------------------------------------>				
				
				<div class="calendario-semana">
					<p>Segunda-Feira</p>
						<ul><!-- LOOP de Segunda-Feira --> 
						<?php global $post;
						$args = array( 'numberposts' => 50, 'cat' => 40 ); $myposts = get_posts( $args ); 	foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="image-calendario">
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
							</div>
						<?php endforeach; ?>
						</ul>
					
					<p>Terça-Feira</p>
						<ul><!-- LOOP de Terça-Feira --> 
						<?php global $post;
						$args = array( 'numberposts' => 50, 'cat' => 41 ); $myposts = get_posts( $args ); 	foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="image-calendario">
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
							</div>
						<?php endforeach; ?>
						</ul>
						
						<p>Quarta-Feira</p>
						<ul><!-- LOOP de Quarta-Feira --> 
						<?php global $post;
						$args = array( 'numberposts' => 50, 'cat' => 42 ); $myposts = get_posts( $args ); 	foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="image-calendario">
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
							</div>
						<?php endforeach; ?>
						</ul>
						
						<p>Quinta-Feira</p>
						<ul><!-- LOOP de Quinta-Feira --> 
						<?php global $post;
						$args = array( 'numberposts' => 50, 'cat' => 43 ); $myposts = get_posts( $args ); 	foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="image-calendario">
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
							</div>
						<?php endforeach; ?>
						</ul>
						
						<p>Sexta-Feira</p>
						<ul><!-- LOOP de Sexta-Feira --> 
						<?php global $post;
						$args = array( 'numberposts' => 50, 'cat' => 44 ); $myposts = get_posts( $args ); 	foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="image-calendario">
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
							</div>
						<?php endforeach; ?>
						</ul>
						
						<p>Sábado</p>
						<ul><!-- LOOP de sabado --> 
						<?php global $post;
						$args = array( 'numberposts' => 50, 'cat' => 45 ); $myposts = get_posts( $args ); 	foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="image-calendario">
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
							</div>
						<?php endforeach; ?>
						</ul>
						
						<p>Domingo</p>
						<ul><!-- LOOP de Domingo --> 
						<?php global $post;
						$args = array( 'numberposts' => 50, 'cat' => 39 ); $myposts = get_posts( $args ); 	foreach( $myposts as $post ) : setup_postdata($post); ?>
							<div class="image-calendario">
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
								<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
							</div>
						<?php endforeach; ?>
						</ul>
					
				</div>
				
<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------->				
					
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?><!-- LOOP -->

					<div id="caixa-informacoes">
																						
						<div class="informacoes-page">												
						   <?php the_content(); ?>
						</div>
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