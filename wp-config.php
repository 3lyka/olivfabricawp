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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'base-data' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BB5mcilw`] gjesW;HMNsSXJM[OKjf1M5pmKb/kUe(G[)ZEXn3^:0>T+^gekF[IW' );
define( 'SECURE_AUTH_KEY',  'S1kW(I|d+p~VC[O8+^ .9.jsU)- =9wVSkrWZHL:JbGry~w#On~(l[,<o5rXQp{}' );
define( 'LOGGED_IN_KEY',    'Kqf0wXR1zGJ`ne|6#0ZChMSU}v{W~pLU4g/n{X%}/VX]-=]lB[Pd;F{U1]_0TKq;' );
define( 'NONCE_KEY',        'vVt9VCM>xcUm<<`L%Y~SMkXp(:^{MSf|y8>E|TT@j`ybbOcYp.{w lB7gx7$GF-+' );
define( 'AUTH_SALT',        '[4UZBXw>PDhKt^txE^U,=5{qeX+]pWoU**?_Yol#RY6HwsBOo0uwE~zz}GmQWxO2' );
define( 'SECURE_AUTH_SALT', '@3aQAbtYS4y=n9^D`{))8bx_{IEIce,bFcDx^>V!4noCa$Jy94J[fW]E;FsJ0S;k' );
define( 'LOGGED_IN_SALT',   'ZWN?iA4Wq >hrK*|0P%d[aezy.ujs&?WkgV)@+<L6=;7e#yc~zg3u{>4+n4Wq.@G' );
define( 'NONCE_SALT',       '+/`|Y)/ufbt(]3le-~8e%RR?3U`T,.Mw*o:A[%I{6o;{`,xz=_j3Y}PS%zg!$+ih' );

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
