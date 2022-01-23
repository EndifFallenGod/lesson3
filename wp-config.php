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
define( 'DB_NAME', 'lesson35' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3^i3M(`W1!P(5lOh#fjsm4%V}>}J(OqRdN}#azi<@j_Kzpvj5tK?dmT8X16ur(7i' );
define( 'SECURE_AUTH_KEY',  'B)8KHP)6}Hvmy~,QySlVDZ -K6W}o>@K0TfX6,5yBzz/Y!M{+*.0.m:`-V$n5],8' );
define( 'LOGGED_IN_KEY',    'Jr6 5j:n q6eY$m6y.Ewdx_xXckdy7Jar*D|pZ:)W):ZeUxkye&TusYHpr|bDD+C' );
define( 'NONCE_KEY',        'y7!ly|~J|mGFjo4t,N1!;BW~k?Mc@y=d^OKSj5+om:N*u$$_ m,&q<O~d|HVw5nY' );
define( 'AUTH_SALT',        '~()p8+1IIT)C%ilp)9e1/H>41%xhC;S+.A26A@?z9a9*?4bf8-wl*eSwb)vurwUj' );
define( 'SECURE_AUTH_SALT', 'E8BG*LQLhkqWaaNz*;4#<,+P==Mm4|@^7r/A81WQCYi$gk5S?znbx]o,v.P1*[6s' );
define( 'LOGGED_IN_SALT',   'dx.H)~5~~lCvD@H|]Yavq7 X<Kajt3zSZQ?sdObWJ>;i:[d?:@bDYzu$4L7HNMlA' );
define( 'NONCE_SALT',       'GeTdZPLRh+ii5pK-.p>%^2ZR)zDm{63y%rdieM]R!<21TS BR,/P TxiNaGua-5H' );

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
