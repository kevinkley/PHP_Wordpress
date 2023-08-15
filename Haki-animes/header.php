<!DOCTYPE html>
<html <?php language_attributes() ?> ><!-- Idioma Dinamico -->

<!-- Head -->
<head>

<!-- Código Adsense -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3585602805106022",
    enable_page_level_ads: true
  });
</script>
<!-- Fim Código Adsense -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name'); ?><?php wp_title(' - '); ?></title>
    
	<meta name="author" content="kevin kley">
	<meta name="description" content="Haki Animes - O Universo dos Animes">
	<meta name="keywords" content="animes, mangás, filmes, ovas, animes legendados, animes dublados, downloads">
	<meta name="keywords" content="doramas, live actions, news coo , ovas, episódios, series">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	
    <?php wp_head(); ?><!-- Necessario pra todos os plugins funcionarem corretamente -->
</head>

<body>
	
	<!-- Caixa do lado Redes Sociais -->
	<div class="visible-lg">
		<div id="bloco-redes-sociais">
			<img src="<?php bloginfo('template_url'); ?>/images/caixa-social.png" rel="Curta e Compartilhe!" alt="Curta e Compartilhe!" title="Curta e Compartilhe!" />
			<div id="redes-caixa">
				<div class="fb-like" data-href="https://www.facebook.com/Haki-Animes-675869962515703/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
				<div id="twitter">
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="Real_Hakianimes" data-lang="pt">Tweetar</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>		
					<a href="https://twitter.com/Real_Hakianimes" class="twitter-follow-button" data-show-count="false" data-lang="pt" data-show-screen-name="false">Seguir @Real_Hakianimes</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
			</div>
		</div>
	
		<div class="volta-topo">
			<a href="#top"><img id="subir" title="Ir para o Topo" alt="Ir para o Topo" src="<?php bloginfo('template_url'); ?>/images/Volta_ao_Topo.png" width="80px" height="80px" /></a>	
		</div>	
	</div>
	
	<div id="header">
	
		<!-- Header Superior -->
		<div id="header-superior">

			<!-- Header Superior Content -->
			<div id="header-superior-content">
				
				<!-- Header Topo -->
				<div id="header-topo">
					
					<!-- Logo Topo -->
					<div id="logo-topo">
						<a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/hakianimes-topo.png" alt="Haki Animes" title="Haki Animes" /></a>
						<!-- Marca do Site dinamica pelo site, ativa depois ser necessario -->
						<!--a href="<!--?php bloginfo('home'); ?>"><img src="<!--?php echo get_theme_mod( 'm1_logo' ); ?>" class="img-responsive center-block" alt="Haki Animes" title="Haki Animes"></a>-->
					</div>
									
					<!-- Menu do Topo 2--->
						<div id="nav-content2">
						   <ul><?php
							   wp_nav_menu( array(
								'theme_location' => 'links-uteis',
								'container' => '',
								'menu_class'=> 'list-unstyled'
							   ));
						   ?></ul> 
						</div>
					
					<!-- Header Social -->
					<div id="header-social">
					
						<a href="https://www.facebook.com/K-Animes-675869962515703/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/Facebook.png" alt="Facebook" title="Facebook" /></a>
						<a href="https://twitter.com/Real_Hakianimes               " target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="Twitter" title="Twitter" /></a>
						<a href="#" onclick="alert('DESCULPE-NÓS. EM BREVE');" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/youtube.png" alt="Youtube" title="Youtube" /></a>
						<a href="https://plus.google.com/u/0/104360764323634265033" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/gmail.png" alt="Google+" title="Google+" /></a>
										
					</div>
					
<!-- Login -->
 	<div id="login">
		<ul>
			<li class="logar"><a href="http://hakianimes.com.br/wp-login" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/login.png" alt="Login" title="Login" /></a></li>
		</ul>
	</div>
</div>
			</div><!--/ Fim Header Superior Content -->
		</div><!--/ Fim Header Superior -->

		<!--- Header Content --->
		<div id="header-content">
			
			<!-- Capa Slider -->
			<div id="capa-slider">
				<a href="<?php bloginfo('home'); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Haki Animes" title="Haki Animes" /></a>							
			</div>
		</div><!--/ Fim Header Content -->
		
			<div id="nav"><!-- Menu -->
				<div id="nav-content">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"></a>
				  </div>
		
						<ul><?php
						wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						?></ul>
		
				</div><!-- /.container-fluid -->
			  </nav>
			</div>
	</div><!--/ Fim Header -->