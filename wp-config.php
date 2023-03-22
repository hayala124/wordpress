<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bookshop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234567890' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<zWNiIG0=W&{<$c3IW3vR;oP&gO$%$r9X%4roI^$t)CMiMsofXC&Pr%p-Kg-X],q' );
define( 'SECURE_AUTH_KEY',  'tLX4<pv>7(G-6*En$/K_m>Z9x:r},c];CpYX&L[Y]&p+a&lnULj9fd`jCyEN6?K;' );
define( 'LOGGED_IN_KEY',    't@ra2R)nk1+3p*PiIcw~Si2~<@7m;>X EYc2lnB(yktt-lsNDB~c(iMcb/iSc1Za' );
define( 'NONCE_KEY',        '{rz:&`[0?TuFl,0^}g8C~-r_X&_DO4b#tDyQW@*wqR^z36}4UZK=AM[LWwn.36Qa' );
define( 'AUTH_SALT',        'S^(k,;g[!*C(FwCPu%8ObnJw-&SW03C-(*{@[s/;EI`Xrg{qBtb3?TrmOLT9m3P[' );
define( 'SECURE_AUTH_SALT', 'TYWt|d%MB#CvL5i}OJ:D=WW@qh2?w:XW7YIb~MX-)*x~xOjb*:fcM]wO{J{ikFt2' );
define( 'LOGGED_IN_SALT',   '/#iKaFKLZ;Jm/a!=pW+s0KL}.8R(oNkFK-pjTGH>ao/Qig>*8V]|G)FTPnR/DiXY' );
define( 'NONCE_SALT',       'q]S}D1xRnXo!]J-v<nn5E8]6 :.hpcSG93y+~}ijL5VC2;{rEPl$P;|N:z# o4x~' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
