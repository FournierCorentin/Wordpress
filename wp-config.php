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
define( 'DB_NAME', 'corentinfournier' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'corentin.fournie' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'in6eG2yC' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'ipabdd.iut-lens.univ-artois.fr' );

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
define( 'AUTH_KEY',         'F _JU%M[Py9Oz~9g8#F-S8T2MrO1Iy[qk^62J#4CWZK|DkiaPI[TB{M<;rkPM|8/' );
define( 'SECURE_AUTH_KEY',  'dvuB0/|(XnU9P^Wa+K! PM23WfoQEBr*+o%@pVF9*FIOz5E-COD9g7a|.i<Q`}.3' );
define( 'LOGGED_IN_KEY',    'j8*@6/7J#0nH6$x-#AVpn@.1daXe~KIW{ #u9eq*U^H`4fV?tzYc6;*1r<p$|dr9' );
define( 'NONCE_KEY',        ':QX,]R@~LsRJR3UZaS%RWK%)RGicaNSU-?Q^MzNo-Vr3Te9MJ.9UTp]R-b-}1`^I' );
define( 'AUTH_SALT',        'PDoB#~7>//.b;rlOr8?,7a[LZ)sSG7O/3f<!U90{.exgZ)s[4lvHv)e]qP<=II0:' );
define( 'SECURE_AUTH_SALT', 'LSjzJ;xyg&yk`r8-|26,0`?j2[l?iR9TNcLsLeU3hBxSX3CWKY-TpHc(50mzp35>' );
define( 'LOGGED_IN_SALT',   '@cX(A?.YN5PxQ^*b!MG?Umbc_GF`B|U<NjnIv](EkK(Eh5VdGtq=(.,-yk%?URlJ' );
define( 'NONCE_SALT',       'Kcw/szB<~[$WJun6TXJtz>2FySq5EJ.D07{Z6wZaZ`?%>&vgT7i]v&w,Y~Fi92VT' );
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
