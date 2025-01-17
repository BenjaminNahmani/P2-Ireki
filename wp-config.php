<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

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
define( 'WP_CACHE', true );
define( 'DB_NAME', "id13078709_p2openclassroom" );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "id13078709_benjamin123" );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "h&X0l(9KKZGvl}Uy" );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'on&fZgc0c/]hQ+x_psYbShIfT0:I_}RioGQ6H]rMB|MeY}Xe9l/9?J6}(~Y<RZuJ' );
define( 'SECURE_AUTH_KEY',  'D[o?bW-/.z9Iu`Vq(-y`W:6i`RL7yPJ]F`a1A%f<f)#}i%zsxo1Yh(q>fe%wZQ*.' );
define( 'LOGGED_IN_KEY',    'i[j8P]Asy).4wFG5A+~xKm5H*By[`=nYT>*56>(70CtubpBL[|lKU{L8va{[PlJF' );
define( 'NONCE_KEY',        'Jk<!.WD.+5rRAm:<,M@G>iX<9XSj^=~7C8/w~>N^s%wz69jR5_uh4|,E S[qJ$lI' );
define( 'AUTH_SALT',        '5~KyqYpVg2kmRS .v[{Z4sB5#?7cF0ML2%gL>8/&X~y/K=M#Oh*k53MSt6EyFpY:' );
define( 'SECURE_AUTH_SALT', 'BAde6gQUU75w`m+=Y$9y,aBA?8o=mb{eK8EtF$De&Su ik]pS/!Nc2{-WtLl(Q}t' );
define( 'LOGGED_IN_SALT',   'Oi=cv+-oPkjW3Cw*#]QdeVs%_)eJ<};KyX0jS*k>w^`8KCi9j1s7|,I2}Zd Vw4^' );
define( 'NONCE_SALT',       'p^X$.bm&)L>f^|<95M=Q/2lNd2g`suuA=h$gib8C!kF$&i~)HtWf07t7H)OX6r7!' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'aap2opnclssrm_';

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
