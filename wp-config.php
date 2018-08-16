<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'pwrotex26');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'pwrotex26');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'JL@joP2llcj');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7nfuRk(LBzd9b/#2AoQnClYmYkx+>sQu_qMRY`=;0Kxc|`?;5j0Mvz%YU!xnK.nd');
define('SECURE_AUTH_KEY',  'JV:1LKA7+f~C#AmvNBviyW}|.0?E2QG*8+Ak5h |Q~GH>fI1,AE2:L;S|69_3N!{');
define('LOGGED_IN_KEY',    'Duf k2?([26WzwzvGFp(J{.gHdBJ)dG3IqpBGo815{-?{}4-8VhBKiD=<Fr9H|Nb');
define('NONCE_KEY',        '}.#&-JS=TBfdH<LJj[ry9GGx,o8|M:S2$~e-p+MF57CKIL-[_+TvG+]I=qRR0Ojk');
define('AUTH_SALT',        '4L&Xv|~Fxdio_V$^JB/cu-+XJ1VZ}wW>D(Pv2&[Jx7[0a qt&izl>/Fkw8WP{&#0');
define('SECURE_AUTH_SALT', ';m/*t]lWrE:dtXx;4jfgQ~}-ye+*_~&~VH]aIryu$Xdmh-l86MiW,2ct0_`Cbbjx');
define('LOGGED_IN_SALT',   'CFy^uPs;+Z|W<K0[k0.~/B0Bk2:vX >ol<UJbgri1ucj*bNN-rVbZxqse$l*PU!$');
define('NONCE_SALT',       'kJOrS73+<UERDfMsK=0z|CeZm%V-_H8)H*KuR_#N -*8(oU6//,ov`0KW0lUsMY,');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
