<?php
/*
Template Name: Portfolio
*/
?>

<?php $GLOBALS['page']="portfolio" ?>
<?php $GLOBALS['page-selected']="portfolio" ?>
<?php get_header(); ?>
		<div class="subheader">
			<?php echo get_page_by_title('portfolio-introduction')->post_content ?>
		</div>
	</div>
</header>
<div class="main">
	<div class="content">
		<div class="article-list-portfolio">
			<?php

			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

			$args = array( 
				'posts_per_page' => 3,
				'category_name' => 'portfolio',
				'paged' => $paged, 
			);

			$the_query = new WP_Query( $args );

			$cpt=1;

			foreach ( $the_query->posts as $post ) : setup_postdata( $post ); ?>
			<div class="portfolio <?php if ($i%2==1) echo " grey"; else echo " white"; ?>">
				<article class="portfolio-content <?php if ($i%2==1) echo " right" ?>">
					<div class="img<?php if ($i%2==1) echo " right" ?>">
						<?php if(has_post_thumbnail($post->ID)): ?>
							<?php the_post_thumbnail('large',array('class'=>'article-image')) ?>
						<?php else: ?>
							<img class="article-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/00_Image_Default.png"/>
						<?php endif; ?>
					</div>
					<div class="description">
						<h3><?php the_title(); ?></h3>
						<div class="contenu"><?php the_excerpt(); ?></div>
						<a href="<?php echo get_permalink(get_the_ID()) ?>">
							<span>Voir le projet</span>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/03_Portfolio_03.png" alt="Voir le projet"/>
						</a>
					</div>
					<div class="clear"></div>
				</article>
			</div>
			<?php 
				$i++;
				endforeach; 
				wp_reset_postdata();
			?>
			<div class="pagination">
				<?php
					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $the_query->max_num_pages,
						'prev_text'    => __('<'),
	    				'next_text'    => __('>'),
					) );
				?>	
			</div>
			<a href="#" id="backtotop" onclick="return false;">
				<span>Haut de page</span>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/03_Portfolio_05.png" alt="portfolio-image"/>
			</a>	
		</div>
	</div>
</div>
<?php get_footer(); ?>