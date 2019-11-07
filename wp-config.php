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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'rK,`$F05 Cd[RLqLCf)0T]{>#ZzSY5bs(sFUi`#Hwv(&v!R[NAko[h;T]2P+_y$r' );
define( 'SECURE_AUTH_KEY',  '&PM!pvM3z(1x0N{]0TQ}!8pTcJ_*K3Z3<[v8=f^DTJ-[Z]1_8EB<S3g`dwDow:Yi' );
define( 'LOGGED_IN_KEY',    '>?7v;O)/Xz{a.r+FreU1:h#^%p52qQfcX1r_`+K,vEEM/?_#5P3ceEbLCxmOnQi_' );
define( 'NONCE_KEY',        'jQBE4B30SH:KF8!hvF$lpdO9IddY*b5PE3U&@A;4c2<_<P/RJU!F,?R|/g]:rk4R' );
define( 'AUTH_SALT',        '+92viT5A8jIkLcw{qm`}@hS5`.`NTT$z4}$1w%fP<88#AZ+<mSF^<AF@QK&[DxWQ' );
define( 'SECURE_AUTH_SALT', 'HLDTd}8FCEF>ltuwqdDX.6m(:bl=(=@#_$6l{Kr*0fz2;vd#U=H9&KdGP(Pd9dsR' );
define( 'LOGGED_IN_SALT',   'eR4j1yVjeoh@>-gFFFnx5/I),&/;zVc,HW[b=wm%y,Hqycl|v}cv%-q 9<{GI@E4' );
define( 'NONCE_SALT',       ' %^on;fMRDd4^yka<><>oZ)BM|Z=f7HjYy!M~M2k44u19yy%v%zBD 6N({X&ZuvL' );
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
