<?php $GLOBALS['page']="homepage" ?>
<?php $GLOBALS['page-selected']="homepage" ?>
<?php get_header(); ?>
		<div class="subheader">
			<?php echo get_page(5)->post_content ?>
		</div>
	</div>
</header>
<div class="main">
	<div class="content">
		<div class="hp-links">
			<div class="hp-link">
				<?php echo get_page(19)->post_content ?>
			</div>
			<div class="hp-link">
				<?php echo get_page(21)->post_content ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="portfolio">
			<div class="portfolio-content">
				<a href="/wordpress_thom/portfolio/">
					<span>Mon portfolio</span>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/01_Homepage_10.png" alt="portfolio-image"/>
				</a>
			</div>
		</div>	
	</div>
</div>
<?php get_footer(); ?>