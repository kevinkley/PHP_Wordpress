	<!--- Footer --->
	<div id="footer">
		
		<!-- Footer Content -->		
		<div id="footer-content">
			
			<!-- Title Footer -->
			<div id="topo-footer">
			
				<div id="botoes-sociais">
					<div class="fb-save" data-uri="https://www.facebook.com/Haki-Animes-675869962515703/" data-size="small"></div>
					<div class="fb-like" data-href="https://www.facebook.com/Haki-Animes-675869962515703/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
				</div>
			
			</div>

	<!-- Banner dos Parceiros do Site -->
	<?php include_once("parceiros.php"); ?>
								
			<!-- Footer Facebook / Area do Facebook -->
			<div id="footer-facebook">
				<div class="title-todo-footer"><span>facebook</span></div>
				<div class="fb-page" data-href="https://www.facebook.com/Haki-Animes-675869962515703/" data-tabs="timeline" data-width="334" data-height="206" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Haki-Animes-675869962515703/"><a href="https://www.facebook.com/Haki-Animes-675869962515703/">Haki Animes</a></blockquote></div></div>
			</div><!--/ Fim Footer Facebook -->
			
	<?php include_once("footer-author.php"); ?>
			
		</div><!--/ Fim Footer Content -->

		<!-- Footer Info -->
		<div id="footer-info">
			
			<!-- Footer Content -->
			<div id="info-content">
				Haki Animes <?php echo comicpress_copyright(); ?>
				<span class="info-right" >~ Desenvolvido por: <b>Kevin Kley</b> </span>
				
				<!--Haki Animes &copy; 2016 - <!--?php echo date('Y'); ?--> <!-- Esse é outro código de data de footer, ver ser usar depois ou deixa o que ta agora mesmo -->
			</div>
		</div><!--/ Fim Footer Info -->
	</div><!--/ Fim Footer -->

<!-- Anti ADBLOCK -->
<style type="text/css">#r03e{position:fixed !important;position:absolute;top:0;top:expression((t=document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+"px");width:100%;height:100%;background-color:#fff;opacity:.95;filter:alpha(opacity=95);display:block;padding:100px 0}#r03e *{text-align:center;margin:0 auto;display:block;filter:none;font:bold 15px arial, sans-serif;text-decoration:none; color: #111;}#r03e ~ *{display:none}</style><script type="text/javascript">
// <![CDATA[
(function(l,m){function n(a){a&&r03e.nextFunction()}var h=l.document,p=["i","s","u"];n.prototype={rand:function(a){return Math.floor(Math.random()*a)},getElementBy:function(a,b){return a?h.getElementById(a):h.getElementsByTagName(b)},getStyle:function(a){var b=h.defaultView;return b&&b.getComputedStyle?b.getComputedStyle(a,null):a.currentStyle},deferExecution:function(a){setTimeout(a,2E3)},insert:function(a,b){var e=h.createElement("strong"),d=h.body,c=d.childNodes.length,g=d.style,f=0,k=0;if("r03e"==b){e.setAttribute("id",b);g.margin=g.padding=0;g.height="100%";for(c=this.rand(c);f<c;f++)1==d.childNodes[f].nodeType&&(k=Math.max(k,parseFloat(this.getStyle(d.childNodes[f]).zIndex)||0));k&&(e.style.zIndex=k+1);c++}e.innerHTML=a;d.insertBefore(e,d.childNodes[c-1])},displayMessage:function(a){var b=this;a="abisuq".charAt(b.rand(5));b.insert("<"+a+'><img src="<?php bloginfo('template_url'); ?>/images/anti-bloqueio.jpg" rel="Desative o Adblock e Ajude o Site" title="Desative o Adblock e Ajude o Site" />  <div class="desativa-adblock"><img src="<?php bloginfo('template_url'); ?>/images/desativa-adblock.png" rel="Desative o Adblock" title="Desative o Adblock" /></div> <div class="texto-adblock"> <p>Leia por favor!</p> Você Sabia que ao usar o Adblock ou outra extensão que impede os anúncios de aparece você estará contribuido para que esse site feche e muitos outros. O site só está no ar por causa dos anúncios, se você continuar usando só vai estar contribuindo para o fim dele e de muitos outros. Nós precisamos de dinheiro para deixar este site funcionando e esse dinheiro só vem de anúncios. Por favor, entenda que todo o conteúdo do site é grátis e se você não tem condição de ajudar o site com uma doação, a simples ação de visualizar o anúncio já estará contribuindo para que o site continue firme e forte.</div> <div class="volte-site"><a href="<?php bloginfo('home'); ?>"> Volte pro Site! </a></div>'+("</"+a+">"),"r03e");h.addEventListener&&b.deferExecution(function(){b.getElementBy("r03e").addEventListener("DOMNodeRemoved",function(){b.displayMessage()},!1)})},i:function(){for(var a="adSpace,adlandscape,adsense6,adspot-c,adv-mpux,bigAd1,slide_ad,ad,ads,adsense".split(","),b=a.length,e="",d=this,c=0,g="abisuq".charAt(d.rand(5));c<b;c++)d.getElementBy(a[c])||(e+="<"+g+' id="'+a[c]+'"></'+g+">");d.insert(e);d.deferExecution(function(){for(c=0;c<b;c++)if(null==d.getElementBy(a[c]).offsetParent||"none"==d.getStyle(d.getElementBy(a[c])).display)return d.displayMessage("#"+a[c]+"("+c+")");d.nextFunction()})},s:function(){var a={'pagead2.googlesyndic':'google_ad_client','js.adscale.de/getads':'adscale_slot_id','get.mirando.de/miran':'adPlaceId'},b=this,e=b.getElementBy(0,"script"),d=e.length-1,c,g,f,k;h.write=null;for(h.writeln=null;0<=d;--d)if(c=e[d].src.substr(7,20),a[c]!==m){f=h.createElement("script");f.type="text/javascript";f.src=e[d].src;g=a[c];l[g]=m;f.onload=f.onreadystatechange=function(){k=this;l[g]!==m||k.readyState&&"loaded"!==k.readyState&&"complete"!==k.readyState||(l[g]=f.onload=f.onreadystatechange=null,e[0].parentNode.removeChild(f))};e[0].parentNode.insertBefore(f,e[0]);b.deferExecution(function(){if(l[g]===m)return b.displayMessage(f.src);b.nextFunction()});return}b.nextFunction()},u:function(){var a="-ad-hrule-,/ad_image2.,/adsrv.,/asyncspc.,/google_adv/ad,/images/ad-,/txtad.,_ads_multi.,_static_ads.,/head486x60.".split(","),b=this,e=b.getElementBy(0,"img"),d,c;e[0]!==m&&e[0].src!==m&&(d=new Image,d.onload=function(){c=this;c.onload=null;c.onerror=function(){p=null;b.displayMessage(c.src)};c.src=e[0].src+"#"+a.join("")},d.src=e[0].src);b.deferExecution(function(){b.nextFunction()})},nextFunction:function(){var a=p[0];a!==m&&(p.shift(),this[a]())}};l.r03e=r03e=new n;h.addEventListener?l.addEventListener("load",n,!1):l.attachEvent("onload",n)})(window);
// ]]></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed --><script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<!-- Chat do Site / Site Chatango.com --><script id="cid0020000150319104669" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 250px;height: 350px;">{"handle":"hakianimesoficial","arch":"js","styles":{"a":"CC0000","b":100,"c":"FFFFFF","d":"FFFFFF","k":"CC0000","l":"CC0000","m":"CC0000","n":"FFFFFF","p":"10","q":"CC0000","r":100,"pos":"br","cv":1,"cvbg":"CC0000","cvw":200,"cvh":30,"ticker":1,"fwtickm":1}}</script>
<!-- Script Publicidade Spider --><script async="true" type="text/javascript" src="//carnage1301.spider.ad?id=48625"></script>
<!-- Disqus Comentários --><script id="dsq-count-scr" src="//hakianimesx.disqus.com/count.js" async></script>
<!-- Código de Botão Volta ao topo, Era precisa fica no headr, mas por impedir qnd abre foi pro footer --><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!-- Código de Botão Volta ao topo, Footer --><script type="text/javascript"> $(document).ready(function() { $('#subir').click(function(){ $('html, body').animate({scrollTop:0}, 'slow'); return false;	}); }); </script>
<!-- Script Facebook --><div id="fb-root"></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>	
	
<?php wp_footer(); ?>
</body>
</html>