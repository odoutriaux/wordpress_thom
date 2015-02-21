<?php
/*
Template Name: Contact
*/
?>
<?php
if(isset($_POST['nom'])){
	$nom     = $_POST['nom'];
	$mail    = $_POST['mail'];
	$message = $_POST['message'];

	if(empty($nom)){
		$error['nom'] = "Veuillez entrez votre nom.";
	}
	if(empty($mail)){
		$error['mail'] = "Veuillez entrez votre mail.";
	}else if(!is_email($mail)){
		$error['mail'] = "Veuillez entrez une adresse mail valide.";
	}
	if(empty($message)){
		$error['message'] = "Veuillez saisir un message.";
	}
	if(empty($error)){
		$emailTo = 'doutriaux.olivier@gmail.com';
		$subject = 'Formulaire de contact envoyé par '.$nom;
		$body = "Nom: $nom \n\nEmail: $mail \n\nMessage: $message";
		$headers = 'From: thomasblondel.fr <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $mail;
		
		if (!mail($emailTo, $subject, $body, $headers)){
			$error['envoiEmail'] = "Erreur lors de l'envoi de l'email. Veuillez réessayez.";
		}
	}
}
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
			<?php //if(isset($error['envoiEmail'])): ?>
				<div class="error message main"><?php echo $error['envoiEmail'] ?></div>
			<?php //endif ?>
			<div class="form">
				<h3>Un message à me faire partager ?</h3>
				<form action="" method="POST">
					<div class="input-container <?php if(isset($error['nom'])): ?>error<?php endif; ?>">
						<input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom'] ?>"/>
						<?php if(isset($error['nom'])): ?>
							<div class="error message"><?php echo $error['nom'] ?></div>
						<?php endif; ?>
					</div>					
					<div class="input-container <?php if(isset($error['mail'])): ?>error<?php endif; ?>">
						<input type="text" name="mail" placeholder="Votre mail"  value="<?php if(isset($_POST['mail'])) echo $_POST['mail'] ?>"/>
						<?php if(isset($error['mail'])): ?>
							<div class="error message"><?php echo $error['mail'] ?></div>
						<?php endif; ?>
					</div>			
					<div class="input-container <?php if(isset($error['message'])): ?>error<?php endif; ?>">
						<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) echo $_POST['message'] ?></textarea>
						<?php if(isset($error['message'])): ?>
							<div class="error message"><?php echo $error['message'] ?></div>
						<?php endif; ?>
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