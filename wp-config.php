<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'web_wp');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'admin');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1PWKK3J|[!,:a9qt<.RV%&?/UEI2#7/m$U(@|LLd~43,|0;(*7Whu{2>S#/3zy#$');
define('SECURE_AUTH_KEY',  'lvfB]=o6QqZ.lb`:C/v4%Ry;$7]x`Wk Ot-X2>H<8qZ(i1)(UQS{>L&x~&[M9]r(');
define('LOGGED_IN_KEY',    'fUw:w=u,_?_~&Q }4]B1t=$WlXoH0C^N)H3M6MP]$]=UAIza{$:1M;SkUQXcuo<%');
define('NONCE_KEY',        'qZ9Q:4~5mBU$o3T.&pzaZ)>Xd_Y|. teFy]%k.<i)Aqv1B;>}>3xyKnbwe9|f (t');
define('AUTH_SALT',        'J:-F~iMvBE,huWbndfB9>oDj/Tg5*[unN#^u| }_I#G`+4xu$t<p#`CTaQ2]#~@5');
define('SECURE_AUTH_SALT', 'l=t/7jRKaR&kR@Cg(%b+^sDs]5tSn/Y{^tcavF>}8:J5x(TBFY[-pUc9,q<e=tT:');
define('LOGGED_IN_SALT',   '|nom20KTwFAOPKy@e9fvkfg^0Vrs(>)CZg^<%@^Tt.i<qEB[D_n!UP]c]N*MA#ff');
define('NONCE_SALT',       'XVFApU!Ks:)@D&`/i$Q%Nf{%FdJ<M:NwsVC?=j#+X{M_tH_,~u`nALu87rX>Az}~');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
