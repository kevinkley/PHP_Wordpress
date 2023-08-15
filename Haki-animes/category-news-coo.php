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

<div id="title-category-noticias"><img src="<?php bloginfo('template_url'); ?>/images/bg_news-coo.jpg" rel="News Coo" alt="News Coo" title="News Coo" /></div>

<div class="main-category-noticias">

<?php post_pagination();?><!-- Paginação -->

<ul>
<?php query_posts('category_name=news-coo&offset=0&showposts=0'); ?><!-- Sempre coloca o Query Post acima do Have Post para nao da error -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<li>

<div id="caixa-informacoes">
	<div class="moldura-dois">
		<div class="author">
			<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '190'); }?>
		</div>
	</div>
</div>

<div id="titulo-categoria-noticias"><a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><h1><?php the_title(); ?></h1></a></div>

<div id="views-categoria-news"><!-- Data, Autor e Comentários -->
<div class="post-info">
<ul><div class="data-news"><?php the_modified_date('j \d\e F \d\e Y'); ?></div><div class="post-autor" ><span>Postado por </span><?php the_author_posts_link(); ?></div><div class="post-coment" ><span>Comentários: </span><?php comments_number('0','1','%'); ?></div></ul>
</div>		
</div>	

<div id="social-news"><!-- Redes Sociais -->
<div class="face-news"><div class="fb-like" data-href="https://www.facebook.com/Haki-Animes-675869962515703/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>
<div class="gmail-plus"><div class="g-plusone" data-size="medium"></div></div>
<div class="enviar-news"><div class="fb-send" data-href="https://www.facebook.com/Haki-Animes-675869962515703/"></div></div>
<div id="twitter-news"><span><a href="http://twitter.com/home?status=Acabei de ler <?php the_permalink(); ?>" title="Compartilher no Twitter!" target="_blank">Compartilher no Twitter!</a></span></div>
</div>

<div id="editar-news-coo"><!-- Editar -->
<span><?php edit_post_link('Editar News Coo', ''); ?></span>
</div>

<div class="thumb-news"><!-- Imagem -->
<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" >
<?php
if ( has_post_thumbnail() )
the_post_thumbnail('news-coo-categoria');
else
?>			
</a>
</div>
															
<div class="informacoes-categoria-noticias">												
<?php the_content() ?>
</div>
</div>						
</li>

<?php endwhile; else: ?>
<?php endif; ?>						
</ul>

<?php post_pagination();?><!-- Paginação das postagens -->
</div>

<?php get_sidebar(); ?>
</div><!--/ Fim Container -->
<?php get_footer(); ?>