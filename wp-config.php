<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'alaf' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ad(^?F8y.NWuk/g6J8Y:s?[o#{?^!]eVP|4o;53]$o70gK)~$V.+U?lS?9B@i+og' );
define( 'SECURE_AUTH_KEY',  '.v(^n29Q0eoe,GbgA;4A?xrw+&|HezWE2K}OOq%YV#Uz<P#F#/wGc[c$ll%MhS;u' );
define( 'LOGGED_IN_KEY',    'EA((Yuh@F[~TB/N3p`5F/??8_P6E9Ylaaq;vr2JIp#xLU|H%@i|e6{&*/vN9!*,n' );
define( 'NONCE_KEY',        '*,OpRXBl2da(_cPHQ#K=89n@jM?ME5&p7jiOv.woW2V:+sRPmb}vdP^r(?pKY#;$' );
define( 'AUTH_SALT',        'A%;+G3.+u&fd$#>C:Q<UNWN(q:y;8B:w}Dbd$K)MZW/hj-Y|G:c>?Ffn^n4uocV&' );
define( 'SECURE_AUTH_SALT', '=ke/RhK.Ze-CMit+>VPGpsyi.=RF*`kP]Q Jsx;?9_1]^..s=@ee@].CX!QUw!h6' );
define( 'LOGGED_IN_SALT',   'y9qE08QE~Wu[7RV058jMkImTr$C1p-dLn[ZCVCk*O hVDQ ?F02es/V3e0PoN#{=' );
define( 'NONCE_SALT',       'F=?F$eF5d[+fViuU5)~rVLr#pqh4Zt#vBE@/Re;?8X^/nEUBNMMd11Ytv?T@,N$}' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
