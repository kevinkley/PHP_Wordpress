<!-- Footer Membros / Area dos membros do site -->
	<div id="footer-membros">
		
		<!-- Title Membros -->
		<div class="title-todo-footer"><span>membros ativos</span></div>

		<!-- Membros -->
		<div class="membros">
			<ul>
				<?php $author='1'; ?><!-- autor 1 -->                                                                                                                                                                                                                                                                                          
				<li><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>" ><?php $user_info = get_userdata($author); ?><?php echo get_avatar($author,70); ?></a></li>  
				
				<?php $author='2'; ?><!-- autor 2 -->                                                                                                                                                                                                                                                                                          
				<li><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>" ><?php $user_info = get_userdata($author); ?><?php echo get_avatar($author,70); ?></a></li>  
				
				<?php $author='3'; ?><!-- autor 3 -->                                                                                                                                                                                                                                                                                          
				<li><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>" ><?php $user_info = get_userdata($author); ?><?php echo get_avatar($author,70); ?></a></li>  
				
				<?php $author='4'; ?><!-- autor 4 -->                                                                                                                                                                                                                                                                                          
				<li><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>" ><?php $user_info = get_userdata($author); ?><?php echo get_avatar($author,70); ?></a></li>  
				
				<?php $author='5'; ?><!-- autor 5 -->                                                                                                                                                                                                                                                                                          
				<li><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>" ><?php $user_info = get_userdata($author); ?><?php echo get_avatar($author,70); ?></a></li>  
				
				<?php $author='6'; ?><!-- autor 6 -->                                                                                                                                                                                                                                                                                          
				<li><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>" ><?php $user_info = get_userdata($author); ?><?php echo get_avatar($author,70); ?></a></li>  
				
				<?php $author='7'; ?><!-- autor 7 -->                                                                                                                                                                                                                                                                                          
				<li><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author; ?>" ><?php $user_info = get_userdata($author); ?><?php echo get_avatar($author,70); ?></a></li>
			</ul>
		</div><!-- Fim Membros do Site -->
	</div><!--/ Fim Footer Membros -->