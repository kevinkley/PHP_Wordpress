<?php
/* Template Name: Error 404 */
?>
<?php get_header(); ?>
	<div id="container">
		<div id="content">
			<div class="publi-topo"><!-- Publicidade -->
      			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('topo_publicidade')) : else : ?><div class="anuncie-topo"><span>Anuncie Aqui</span></div><?php endif; ?></div>
			<div id="topcover"><?php include (TEMPLATEPATH . '/error.php'); ?><p>Tente uma pesquisa!</p></div>
			<div id="perdido"><p>Está perdido? não ser preocupe, o Zoro também está!</p></div>
			<div class="entry"><img src="<?php bloginfo('template_url'); ?>/images/nada-encontrado.jpg" rel="Error 404" alt="Error 404" title="Error 404" /><p><strong>Sem página aqui? Essa não! </strong> Será que elas foram sugadas pelas trevas do Barba Negra?</p></div>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>