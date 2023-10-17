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
define( 'DB_NAME', 'Shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admen' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'IO;&D@+_u*wmDg8)E6b6!R-ERRKvW`HC8-(l5Uspu_&p1.ffO6@EkWlZ2_QnOB-&' );
define( 'SECURE_AUTH_KEY',  '=#P:jD~*f/>y!n|Xb-k:V{?z#/vZ.U[q9$u8Zy5>tLc|~y<B+3D*F}&ye?S2/S.)' );
define( 'LOGGED_IN_KEY',    '66uj60)8iRg)6}ZI-p!M-i8Oi.0i6o.I-HTyhA`_zL_8*#ci3]0(jX^F{*22ay^m' );
define( 'NONCE_KEY',        'sU|O]wQmUBi83(Zn_mGRLI%|t(QY>:]s1^BP:S2YavFq.JIGj?)Q0vP=WxwP@||I' );
define( 'AUTH_SALT',        'vg9NILHE+hUL<3a^U?rp7+A}FZ{2[$~t^QM@g0Q=+{g+{Yc,9o2!l7nvoStWn#3w' );
define( 'SECURE_AUTH_SALT', '29+)a7&H})p^q2H}>P2`Rtb>+1+0_.,nDS![OdG}4t@)/jEZ$?mbo54qTEWxD Q@' );
define( 'LOGGED_IN_SALT',   '3@qOd.<}KDU18FNxXZX5u_%B&a3+!l1cp(;v_`qBarw+k45)=FY.getri+C[is[Q' );
define( 'NONCE_SALT',       'zv)wLMz}aa<DxNAw@:5aCxt2pJy2h>q#6m1mm05no8]3^kIQAGN3GJi?|Nz;7Oaj' );

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
