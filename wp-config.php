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
define('DB_NAME', 'sarmak');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{(C5C@x3(m8&r(CFe|Vyt)_WFkj%p,K2!b+,N:^W|W{}U=&|@iAzv;66S*B/u+s_');
define('SECURE_AUTH_KEY',  'jG|.PFepv&OE(R0&XxbLm]&ac?|01<hPsNj,4}Cqp-~nl.:I[`F@t| 3*|Bu)oQp');
define('LOGGED_IN_KEY',    '6D,PoG9xR9gfbf?.3<2+dB>L$z,r;;C<.=B Ab<p:Zz[*UmmS;#VzgMXZU5sz|iP');
define('NONCE_KEY',        'ro/&}&IBNK[~9bV3W1M08]R C_aog-zg{fqnoB+m(VKK|G0T ;as-FV(9Cr+y.nO');
define('AUTH_SALT',        ',UP;3kdCg?4J|}BVnx2`=-?LoMI=r{FZmSJF|]CJ;*(1r7.+Kvkue$tQTyw!N%j]');
define('SECURE_AUTH_SALT', '-VpS9l$_mhPm)Bo~] LKC|I{pNcFZkh-/9MtV?aP7/K@!3lGx<TTGS+=MMK-XKjp');
define('LOGGED_IN_SALT',   's5jf<rf^-R/Ga6)A(]$A #hKX;y {|mopO|#(LA%(!|x!=sc+A,=2AIf2 9~.[*-');
define('NONCE_SALT',       'mLdKV-t0s@@S~$I/Lu]3S1q!$J(n <H^%~1G28PaTF`+*5/=H8T SD+W<v[CNy)^');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'sm_';

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

define('WP_POST_REVISIONS', false);
	
/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
