<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_thom');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',PT.)Nt=s!J;`!X6t-LAope7i+70 u];0?!u)Tcc#6O|XA,1R]Z.yWO2<:q ?PJ&');
define('SECURE_AUTH_KEY',  'xcQMsoUjy^6L|oN6[6ff%,L_E`-`1L-ff*|(o)fRz)-[@j:UC=/qq|C|@,e&77w~');
define('LOGGED_IN_KEY',    '%E4=*a43ad.[,y*D0$0h)E*y)DY:33x*#h+OSs*!<$6@RK1>w;euwxkh+U{1#ZA/');
define('NONCE_KEY',        'or&p/}usJ7qGD?tCdv/DU(gRm}1&asD-E$lg|w-Th*9N{7 2,f&D:,*{AD{H y-M');
define('AUTH_SALT',        '8_u`6wOf;Uo!ynqUy1xED%H!q|0Br0jQFFSY@8`DM3`$!k9+@~VM!k/v/Z-eK2F1');
define('SECURE_AUTH_SALT', '.uo!0[p-:[0IPr%+A0iw3;7anIBKp|KH,L@Vrr+X`~ba/)~-+XOSmI[VP.K`2(C>');
define('LOGGED_IN_SALT',   'UT)UB_[$sXo+`ryDAXTvGqpJzCZi+BmCYN+p[<8H]/Sp?{|xQ%c|m)dt+4lI|NQ:');
define('NONCE_SALT',       'D$I$YrMgKd;Wi6nodIdXBN>PrQ$[Ng.m:rz3n&DrLe|D)jps%GN#bB(f;F;wGP2f');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');