<?php
/*
Template Name: Contact
*/
?>

<?php $GLOBALS['page']="contact" ?>
<?php $GLOBALS['page-selected']="contact" ?>
<?php get_header(); ?>
		<div class="subheader">
			<?php echo get_page_by_title('contact-introduction')->post_content ?>
		</div>
	</div>
</header>
<div class="main">
	<div class="content">
		<div class="contact-content">
			<div class="form">
				<h3>Un message à me faire partager ?</h3>
				<form action="" method="POST">
					<div class="input-container">
						<input type="text" name="nom" placeholder="Votre nom"/>
					</div>					
					<div class="input-container">
						<input type="text" name="mail" placeholder="Votre mail"/>
					</div>					
					<div class="input-container">
						<input type="text" name="message" placeholder="Votre message"/>
					</div>
					<button class="submit">Envoyer votre message</button>
				</form>
			</div>
			<div class="social">
				<h3>Suivez-moi sur l'internet</h3>
				<div class="facebook">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/02_Contact_03.png" alt="twitter-image">
					<span class="blue">Facebook</span> /thomblondel
				</div>
				<div class="twitter">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/02_Contact_06.png" alt="twitter-image">
					<span class="light-blue">Twitter</span> @thomblondel
				</div>			
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>