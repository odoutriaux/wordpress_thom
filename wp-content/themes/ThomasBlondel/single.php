<?php $GLOBALS['page']="blog" ?>
<?php $GLOBALS['page-selected']="blog" ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?> 
			<?php while (have_posts()) : setup_postdata(the_post());?> 
		<div class="subheader">
			<h1><?php echo $post->post_title ?></h1>
			<div class="intro date">
				<?php echo date("d.m.y",strtotime($post->post_date)); ?>
			</div>
		</div>
	</div>
</header>
<div class="main">
	<div class="content">
		<div class="post-content"><?php echo $post->post_content; ?> </div> 
	</div>
</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>