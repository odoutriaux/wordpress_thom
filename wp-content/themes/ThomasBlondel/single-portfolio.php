<?php if (have_posts()) : ?> 
	<?php while (have_posts()) : setup_postdata(the_post());?> 
		<?php $GLOBALS['page']="portfolio" ?>
		<?php $GLOBALS['page-selected']="portfolio" ?>
		<?php $GLOBALS['header-background']="style=\"background-image: url('".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."');\""?>
		<?php get_header(); ?>
		<div class="subheader">
			<h1><?php echo $post->post_title ?></h1>
			<div class="intro"><?php echo $post->post_excerpt?></div>
		</div>
	</div>
</header>
<div class="main">
	<div class="content">
		<div class="post-content">
			<?php echo $post->post_content; ?>
		</div>
		<div class="back-to-portfolio">
			<div class="back-to-portfolio-content">
				<a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
					<span>Retour au portfolio</span>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/01_Homepage_10.png" alt="portfolio-image"/>
				</a>
			</div>
		</div>
	</div>
</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>