<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressPortfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R^l}-7c!E|-2G!-DBIT(GhiBc28KIpCL6kw0,v@I%vCN IPowT?6,w/=j)i46<$(' );
define( 'SECURE_AUTH_KEY',  'AAy$`LUdsOn9L1z|8?L%}djsz1P?oG6O_DO;3%r-hL[iNC7klg9)o5EC;-C3jUb1' );
define( 'LOGGED_IN_KEY',    'k_{,PGQ{UCpEWT,~vB=>jwzu)c>c]`fDHLOnL2FM&U8%=VT@1>0o;{]F+YLXIM4f' );
define( 'NONCE_KEY',        'mI=wg~K4y`4)BOJ&*=|F4n5&nrr$|JpgF.}Z$dFQu3V9pgX3_c*Ts?Y2Pin7i$I1' );
define( 'AUTH_SALT',        '*EK)pq%K=/%C5(+3Mtn~{~zA^s60W-H*Sjz@bg_pc%j*1Pbdu_3_)$cD8P%6..:|' );
define( 'SECURE_AUTH_SALT', ',v0-B4iTUVlxf$a_Q(pjGITzn|lE|R[9i2Qu7d{_p.^2UIlTrI.QAUPYHIb^U0f[' );
define( 'LOGGED_IN_SALT',   'TnvCf2O+#MM^#C.^,I~o++R|riN:U[ : GLo(R{3U$7O=7ny7X$pl7/4g1:MlMjI' );
define( 'NONCE_SALT',       'd0j7^UXD}`82!eGhM$q0{lSY[d%A|6Pk7k{pb!G Q|v%&Y40u?TbAK7f@:xp:r=M' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
