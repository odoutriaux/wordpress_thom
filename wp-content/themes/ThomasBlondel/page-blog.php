<?php
/*
Template Name: Blog
*/
?>

<?php $GLOBALS['page']="blog" ?>
<?php $GLOBALS['page-selected']="blog" ?>
<?php get_header(); ?>
		<div class="subheader">
			<?php echo get_page(32)->post_content ?>
		</div>
	</div>
</header>
<div class="main">
	<div class="content">
		<div class="article-list">
			<?php

			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

			$args = array( 
				'posts_per_page' => 3,
				'paged' => $paged, 
			);

			$the_query = new WP_Query( $args );

			$cpt=1;

			foreach ( $the_query->posts as $post ) : setup_postdata( $post ); ?>
				<article class="blog">
					<div class="img<?php if ($i%2==1) echo " right" ?>">
						<img class="article-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/01_Homepage_03.png"/>
					</div>
					<div class="description">
						<h3><?php the_title(); ?></h3>
						<span class="date"><?php echo date("d.m.y",strtotime($post->post_date)); ?></span>
						<div class="contenu"><?php the_excerpt(); ?></div>
						<a href="<?php echo get_permalink(get_the_ID()) ?>">
							<span>Lire l'article</span>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/05_Blog_03.png" alt="Lire l'article"/>
						</a>
					</div>
					<div class="clear"></div>
				</article>
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
		</div>
	</div>
</div>
<?php get_footer(); ?>