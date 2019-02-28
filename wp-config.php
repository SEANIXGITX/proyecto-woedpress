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
define( 'DB_NAME', 'tema-1' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'GO0pj$*$BP+UnjC)I?|YHG(e]iSZHX-p<z0+?5@Ew(i,b0Hr:o1Kda8>|35O]y^V' );
define( 'SECURE_AUTH_KEY', '~Sa5F}M8)-hkLM`M7Av7)J+;gJ@Y;/rC;8vtTZc3SNnCQSo}vD2~IX5#jt+/:7+<' );
define( 'LOGGED_IN_KEY', 'aXET7a<cbP37GEE-o7!:=z3e-8+vCl*t+g1s=AH$xh{YU2DiYHMR,}:9T z`/_wl' );
define( 'NONCE_KEY', 'S4dMp[!4%K3j.5P#DK9y_a8(]m*rt:O?=<XoW;/Vhc<:xbltz]Au qb@jz*uXh.#' );
define( 'AUTH_SALT', 'aILJ}TA,Vf#+tFH%b=&<<g!5d,7|c!./u~t2;rI]4gyn_$IF-J![yP)5PO*aJ<,Z' );
define( 'SECURE_AUTH_SALT', '1RGdQcJ;<Xu1:bDZ.{f@RRf=q=2(3pMulcw>TLhB2=+c78y:$wB*~cjD[KMZn?~u' );
define( 'LOGGED_IN_SALT', 'i*:Wijz^WkQ]5.Aaw2!(Vf|zqj[$)!SZe^&P7>K11D5z$mex?Dzfw]Sr*%G+[M`s' );
define( 'NONCE_SALT', '>czAA)?aLOy)Y {kq0_0)g%@vKLjqjDr+/49_lZnn(g[l%kCsdflBQ)^{d9>A.Io' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

