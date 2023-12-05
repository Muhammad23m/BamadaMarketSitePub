<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bamadaMarket' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*V,C1l!A{57+N(37OF4{qo;xw+uf/A(qVAdP{%MUUv(ZY1.zP{/06wR[pS/DF:,R' );
define( 'SECURE_AUTH_KEY',  '.6}sS+s1m3s;d|axWW;wlZ[}XsIBl2D^OL~z:@ e=2cQvs{nb@sEN:ud:]*C8c0`' );
define( 'LOGGED_IN_KEY',    'BB3m<V>;^T1Nw;6a+uO]p9jedB/`unJJMC6(ds=PVn1Kj<;%*O:2;^YvCSs6)Bre' );
define( 'NONCE_KEY',        '&Z8.EJ^DP845D}hv}5e~F.+=w@Xk.Q<HZt)V5z^FS@Y]Q1jx.2ktU~$:ne>nB~?O' );
define( 'AUTH_SALT',        '4%JB11U1XjRWk[+@_*PmTe I%e&h`bzvm1V[y*u^|ug/U5Wf+ElVB!m%].hI/J+~' );
define( 'SECURE_AUTH_SALT', 'SLTO&-d i-qvI7[dxGZ@]:fLwNbfRf7<6}J}iMSrDd!6F~)vL(J^Y/qn;&`cDbd|' );
define( 'LOGGED_IN_SALT',   'o,.ajt+4]enE#k$pwXl1P2.fnY4f*{$1Sb|>ZZygt+YU36|K=aP>KoF6SE]cuX/T' );
define( 'NONCE_SALT',       'wJ. [9pE=Xq*fG#u;Hs[V q`Jc.~;O#BY=P1<q z/NIg5^Py)#r:hx:F~RQq[u%V' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
