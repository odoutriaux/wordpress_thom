		<footer>
			<div class="footer-content">
				<ul>
					<li><a href="/wordpress_thom/">Profil</a></li>
					<li><a href="<?php echo get_permalink(60) ?>">Portfolio</a></li>
					<li><a href="<?php echo get_permalink(28) ?>">Blog</a></li>
					<li><a href="/wordpress_thom/contact/">Contact</a></li>
				</ul>
				<div class="funny"><?php echo get_page_by_title('footer-phrase')->post_content ?></div>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/01_Homepage_13.png" alt="Cerf"/>
				<div class="copyright">Copyright 2015 Thomas Blondel</div>
			</div>
		</footer>
	</div>
</body>
</html>