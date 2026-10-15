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
define( 'DB_NAME', 'mysite1.rus' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'D|L6hs.@aunXIa#@&-b>%{WcvfKtqrskn+`aEZLvoWXCRx/&R%k&VfBc!0fYoqsz' );
define( 'SECURE_AUTH_KEY',  ')dA_ibVw9_wGYCYmU5v@2*R8|O~&#v9 xg$LANuTS@[0s3S3^7ZO ,DL`{Q0#(1I' );
define( 'LOGGED_IN_KEY',    'NR$y$Z?oYt(}+EwiFc{!i;{DRLFy4m$`B{D%M*m54#4KSlB5NDDm:i_p-ss)-Djr' );
define( 'NONCE_KEY',        'ZVHAo.),uojSGCK}r&rDxIP=iD{{EUeGTHCiwFgwQUTWQ}~Vh?_@* eIA](@0g^g' );
define( 'AUTH_SALT',        'IYcsHL%Zvqx1|UC&p`]&R;Dz1Ml] 8$0/a:eezkZ[p9a]#EbiPNrMy?moby-I=dW' );
define( 'SECURE_AUTH_SALT', 'tuV%#++1%0UyA5dUP@X~jG`nqJU`0wT!!Q@W-L8rjlCej;VB,jO]{r3zM_x4St=R' );
define( 'LOGGED_IN_SALT',   '8MZ9IY-6JB6ULLi;Qa.[IJ0qFE(+?>]Am>GzD^re=kKGN.W{i3OL{_,IYg:r8OM#' );
define( 'NONCE_SALT',       'G@7(qVsXTx/S5@%Kr/8=V`=LJy!,HJydG/%`L;:Q{./V$Mq!>CA.1|?C??$Zt1?@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
