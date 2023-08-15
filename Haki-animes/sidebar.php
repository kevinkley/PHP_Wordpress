<!--- Sidebar --->	
<div id="sidebar">

<!-- Nav tabs -->
<div class="opcao-doe-news">
<ul class="nav nav-tabs" role="tablist"><!-- Controles de Mais Vistos e Comentados -->
<li role="presentation" class="active"><a href="#newscoo" aria-controls="newscoo" role="tab" data-toggle="tab">News Coo</a></li>
<li role="presentation"><a href="#ajudedoe" aria-controls="ajudedoe" role="tab" data-toggle="tab">Ajude o site! Doe.</a></li>
</ul>
</div>

<div class="slider-noticia">
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="newscoo">
<div id="title-sidebar"><span>News Coo</span></div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<!-- Número de Sliders -->
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
<li data-target="#carousel-example-generic" data-slide-to="2"></li>
<li data-target="#carousel-example-generic" data-slide-to="3"></li>
<li data-target="#carousel-example-generic" data-slide-to="4"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">

<?php 
$posts_slides = new WP_Query(array( //Serve pra criar o loop tambem
'category_name' => 'news-coo', // Nome da categoria especifica 
'posts_per_page' => 5         // Numero de slides
));
$i = 1;
while($posts_slides->have_posts()) : $posts_slides->the_post();
?>

<div class="item <?php if($i == 1) echo 'active'; ?>">
	<a href="<?php the_Permalink(); ?>"target='_blank' alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><?php the_post_thumbnail(''); ?></a>
	<div class="carousel-caption visible-lg">
		<h3><a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" ><?php the_title(); ?></a></h3>
	</div>								

</div> 
<?php $i++; endwhile; wp_reset_postdata(); ?>         

</div>

<!-- Controles do Slider -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<div class="seta-direita"><img src="<?php bloginfo('template_url'); ?>/images/icon-seta-esquerda.png" alt="Anterior" title="Anterior"></div>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<div class="seta-direita"><img src="<?php bloginfo('template_url'); ?>/images/icon-seta-direita.png" alt="Próximo" title="Próximo"></div>
<span class="sr-only">Next</span>
</a>

</div>	
<div id="title-sidebar-fim"></div>
</div><!-- Fim News Coo -->

<!--------- AJUDA AO SITE! DOE. ------------------------------------------------>
<div role="tabpanel" class="tab-pane" id="ajudedoe">
<div id="title-sidebar"><span>Ajude o site. Doe!</span></div>

<div class="doacao-sidebar">
<!-- Imagem da Doação -->
<img src="<?php bloginfo('template_url'); ?>/images/Doacao.jpg" rel="Faça uma Doação e ajude o site a continua no Ar" alt="Faça uma Doação e ajude o site a continua no Ar" title="Faça uma Doação e ajude o site a continua no Ar" />

<!-- BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="currency" value="BRL" />
<input type="hidden" name="receiverEmail" value="kevinkleyoficial@gmail.com" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<br>

<!-- Botão PayPal -->
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pt_BR/i/scr/pixel.gif" width="1" height="1">
</form>
<!-- Final Botão PayPal -->
</div>	

<div id="title-sidebar-fim"></div>
</div><!-- Fim tabpanel -->
</div><!-- Fim tab-content -->

</div><!--/ Fim Caixa News Coo e Doação pro site -->

<!----------------------------------------------------------------------------------- -->

<!-- Sidebar Vistos / Area de mais Vistos do site -->
<div id="sidebar-vistos">

<!-- Title Vistos -->
<div id="title-sidebar"><span>top 10 lançamentos</span></div>

<?php if(function_exists('get_most_viewed')): ?><!-- Código pra mostra os posts mais vistos -->
<ul>
<li>
<?php get_most_viewed('post',10); ?><!-- Ser quise pega paginas, basta coloca paginas no lugar de post -->
</li>
</ul>
<?php endif; ?>
<div id="sidebar-fim-top-novos"></div>
</div><!--/ Fim Sidebar Vistos -->		

<!----------------------------------------------------------------------------------- -->

<!-- Sidebar Postagens Recentes -->
<div id="sidebar-recentes">

<!-- Titulo Recentes -->
<div id="title-sidebar"><span>novos adicionados</span></div>

<ul>

<?php query_posts('showposts=10&cat=-9') ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>				

<div class="post_recente">

<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" >
<?php if ( has_post_thumbnail() ) 
the_post_thumbnail('' );	else
echo '<img src="'.get_bloginfo('template_url').'/images/fundo-sem-capa.jpg" />';
?></a>
<a href="<?php the_Permalink(); ?>" alt="<?php echo get_the_title()?>" rel="<?php echo get_the_title()?>" title="<?php echo get_the_title()?> &raquo; <?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?>" ><li><?php the_title(); ?></li></a>			
</div>

<?php endwhile; else: ?>
<?php endif; ?>				

</ul>
<div id="sidebar-fim-top-novos"></div>
</div>

<!-- Sidebar Publicidades -->
<div id="sidebar-publi">

<!-- Title Publi -->
<div id="title-sidebar"><span>publicidade</span></div>
   	
<div class="boxes">
<div class="thebox">
      				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar_publicidade')) : else : ?>  
<span>Anúncie Aqui</span>
       				<?php endif; ?>  
    			</div>
</div>	

<div id="title-sidebar-fim"></div>			
</div>

<div id="contador-visitas">
<div id="title-sidebar"><span>visitantes & etc</span></div>			
<div class="cont-box">
<!-- Contador de Visitas -->
<p>Número de Visitas</p>
<div class="cont-visitas"><a href="http://www.webcontadores.com" title="contador de visitas"><img src="http://counter5.01counter.com/private/webcontadores.php?c=6a16c4e4baa081b503b7a8da372ce9c9" border="0" title="contador de visitas" alt="contador de visitas"></a></div>

<!-- Contador de Usuarios Online -->
<p>Úsuarios de Haki Online</p>
<div id="contador-online"><script id="_wauynk">var _wau = _wau || []; _wau.push(["colored", "x4zrdrmnpja9", "ynk", "ffc20e000000"]); (function() {var s=document.createElement("script"); s.async=true; s.src="http://widgets.amung.us/colored.js";	document.getElementsByTagName("head")[0].appendChild(s);})();</script></div>	

<!-- Monitoramento -->
<p>Monitorado por: </p>
<div class="site-monitorado"><div id="histats_counter"></div><script type="text/javascript">var _Hasync= _Hasync|| []; _Hasync.push(['Histats.start', '1,3517116,4,502,95,18,00010000']); _Hasync.push(['Histats.fasi', '1']); _Hasync.push(['Histats.track_hits', '']); (function() { var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true; hs.src = ('//s10.histats.com/js15_as.js'); (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs); })();</script><noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?3517116&101" alt="" border="0"></a></noscript></div>
</div>

<div id="title-sidebar-fim"></div>
</div>
</div><!--/ Fim Sidebar -->