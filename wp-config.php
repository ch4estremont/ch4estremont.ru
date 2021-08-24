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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'admin_remont' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin_remont' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'yC8yA1bV1krN5m' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'i$1Wf.-k~+Z?VuVAWql>HmlRk4y~9J8@#2 K@7J^HB%},KQ7j?aB#c#TN<yo_gTr' );
define( 'SECURE_AUTH_KEY',  'Dv)E}r@%:CCQG~Yfh2@a]C;e~s*+2.ZKG2G$<&?r-4DS{nON#B5}G51QbGSnY%Gg' );
define( 'LOGGED_IN_KEY',    ' ;$DHaytTW9[KQi/~|Cd-b2;Jxx{V1/M_v]S(W;fi>z?%vak,%_z=lWIO50Q,f&q' );
define( 'NONCE_KEY',        'EW6qMjp*wt6EMwNR8?,L#Wt9Rhe:v%T-fL7G7`$8zifi5($3`Yx@WAVvcbc)q[es' );
define( 'AUTH_SALT',        'Ei[uYNZXj0zEdl?;5N{~NfO!Gs!IpUAwG<m}65H->N )+HxV3?7mMF@Sb-K0oym!' );
define( 'SECURE_AUTH_SALT', ',SED,=^dJKkKB1PtcHZ.`(e9sQvPRnb1lI-@BY` |SWi(Xu2H[*08gi5]Q-z4;9C' );
define( 'LOGGED_IN_SALT',   '#FqpxhEkXT^exc#%~/Y~WR(<^3hPUfv9J@^+B-=o1ER5)SG)qU#e0IHGn0A&ThoL' );
define( 'NONCE_SALT',       'Pr@F%LF >~zD]}wY~r=WH_M`9IQ;6CzIZ2|7$9.Rgh{9bOQ0QihBx:>NDyfvu#21' );

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
