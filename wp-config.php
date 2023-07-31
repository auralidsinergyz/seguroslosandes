<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'local');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '}Q5Z5>w(l5[VsBUwpXJ[P~9E,~k|a3I!>;7JIE>Y7euFhCvDv/:q]>Q;nZueJl|N'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'w{gV%;^<[IyC&VMfh}#ix{I3I3rw`E>R>BP*j*x-J?TI._Z+*gV@E){(_7I!1x4G'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '|cp6oZ+WsfkE0y]@Mj-IyUX0K_`}?qEV(z]z;Y$tT#C0fnC@8 C~:h~!2cZiMZg%'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', ',92i#_*PuPG[$a93O~*>V_9JM!}:0fyge2,`%OO0d$e-Y{@g$M=G5&wG_]m~(9j('); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '(.7DElA1sKv~_{DA2m8{F{)f<kh|Z>~_;n7E+QQA@FkL4?c# ]mU8jCep^1,NK3~'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '-]$xm2hDX$?|&}KfkG|<l1U]|;P_Nd_V[ScSyrJ>R[7e/^fwp,hS7oGux&Z.tQYX'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'GIvgVB<LoYMFy.)$4S|sPx0@d|oL+(Sv{:kZQ9H<C|P,)3JHY.6hqjSurx:NC2Kk'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'S|ve V0b2&n6=)d<I`,(E/=6<@|6+67TfTsyuPdF]HY.0*?F{l{ l%opeJovq7j_'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/** Activado el dia 09Mayo por Anger **/
define('WP_CACHE', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0777 );
define( 'FS_CHMOD_FILE', 0777 );
