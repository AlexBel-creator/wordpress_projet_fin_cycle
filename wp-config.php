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
define( 'DB_NAME', 'wordpress_projet_fin_cycle' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~`|eczr12$/?PD^T/M@{dC;*~`0dTT2jwXFs(nQJ2[x=1{ E]|deu/:eos+5wVa_' );
define( 'SECURE_AUTH_KEY',  'Kr,W^ClUj&w2mpz9`)3V%E3<}~;:i?aXGV<3`sI1pYll6FC!a?zu?2Qk],FwF3Jt' );
define( 'LOGGED_IN_KEY',    'Ab>};&re&aUb H(TUC+JcX[Pc{`iAll,3~=DwHle/#ai^}k3M;#simK1&UtN`$`;' );
define( 'NONCE_KEY',        '~0hiuy (V#K|.=YuD9&N~:,4kXN6,x_wZEY@&9S{Lt~)|Jk/2u7A15uF|j),_dUt' );
define( 'AUTH_SALT',        '<U&Q!;KY.PDvRCDDO:Q$({Va?QTgIM|qh_3K2jrhq8b_r.jt^*Oh^;@_P)hZy )|' );
define( 'SECURE_AUTH_SALT', 'I@&o!HLyqd`R27fbr<djpDg!7xuJk_.t&/qFi80(6zHk8E>tja+Dq l1?>7Vu2Q/' );
define( 'LOGGED_IN_SALT',   'v.h+JX/yW>##3HHmJ(BF5?Q:yY@AokKrC>4aoR~ND*_`501?PCTpfe#nT$9hskZh' );
define( 'NONCE_SALT',       ';+Zw{w{3ajy([.:!3X3]lWvb3QaJbOr}c:/@H|2Ik_n ]l|Bz]wg~9Se<r.f~=j,' );
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
