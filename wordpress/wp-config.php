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
define('DB_NAME', 'wordpress bd');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '~Yb`X=jPY:;@u6)3]t-.vvm0,:&}E2H?kS/|u^IJ@4fdP&L~U!IM/sZ]!=:KReD&');
define('SECURE_AUTH_KEY', '-:EF%x#?<lS,#b_Lse3xn!OmVv2s9J[O5g6|4.zW;88fx7Hz/PYo$mn,w;k7`1bR');
define('LOGGED_IN_KEY', 'Z o)4_)V}8lg&@)SwK+jg^Q?3OMIsS>S:}X(IY)v)l>{qRt#yzAJE@0Qk1gR5mL]');
define('NONCE_KEY', 'L%!c;I:41xPUYsj2 <3k)QIVr#:,)&Ybgsf`RM.wi*H8v,P6>~9L)H(Ek5~M_<&Z');
define('AUTH_SALT', 'mM/d0yd:0:}rns=omfwbqEh(rw>8Pv:l} lN*P!{V#BnSQ#z0mIm9)|4T#C#T1D@');
define('SECURE_AUTH_SALT', 'sglKUd~{c<nnf)R9Nw+-FW1LkJvj:<4JK0a;+~3bMyp_;&q{#ruxk(VhP^Hh8.nO');
define('LOGGED_IN_SALT', 'q}%&QYm%&GFr: Y>>Y>VS4DlWPrCp_d~/|f)zIA1Ho673r]cF#VSaY~0,LwNY4KR');
define('NONCE_SALT', '3zbIAy3o,mWyEr~n%1w<=bmPu<y5)!NJQTh.yx,<*e.bdRJBD2)~Yv_wF^djcN=9');

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

