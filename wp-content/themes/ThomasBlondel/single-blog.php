
<?php if (have_posts()) : ?> 
	<?php while (have_posts()) : setup_postdata(the_post());?> 
		<?php $GLOBALS['page']="blog" ?>
		<?php $GLOBALS['page-selected']="blog" ?>
		<?php $GLOBALS['header-background']="style=\"background-image: url('".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."');\""?>
		<?php get_header(); ?>
		<div class="subheader">
			<h1><?php echo $post->post_title ?></h1>
			<div class="intro date">
				<?php echo date("d.m.y",strtotime($post->post_date)); ?>
			</div>
			<div class="intro">
				<?php echo $post->post_excerpt; ?>
			</div>
		</div>
	</div>
</header>
<div class="main">
	<div class="content">
		<div class="post-content"><?php echo $post->post_content; ?>
			<div class="share">
				<p>Partager cet article</p>
				<div class="social">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/02_Contact_03.png" alt="facebook"/>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/02_Contact_06.png" alt="twitter"/>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/06_Article_03.png" alt="google"/>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/06_Article_05.png" alt="linkedin"/>
				</div>
			</div>
		</div>
		<div class="back-to-blog">
			<div class="back-to-blog-content">
				<a href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">
					<span>Retour au blog</span>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/05_Blog_03.png" alt="blog-image"/>
				</a>
			</div>
		</div>
	</div>
</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>