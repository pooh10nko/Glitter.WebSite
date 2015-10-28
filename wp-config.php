<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress_glitter_local');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x>wrdYGjPYj}7w75-#8q>N+ElpA>cb-Rz|YM!z;H_X`j!%N/j]T.QaSI(yC=~5-?');
define('SECURE_AUTH_KEY',  '<`7E4&!vipiiswi-1PWW0#ev;+ModAl+M_J<UNc|DWfCpLa6vRq@>Jv!V=,YSIh6');
define('LOGGED_IN_KEY',    '~RW:Dc=gS3wE3&GtX@gAH{NP6lXC0Te=A>nHJYA/<P8$7WiYl1D?kcW+SQXZI^qF');
define('NONCE_KEY',        'H;MH`=N+%OlU=q~GGez>f4>wPZgwfN I;who PhF`,T<sI9$A-~sS4pT+aYix5e-');
define('AUTH_SALT',        '9rqRO_kFeT8Hpix&!wIYZwCt)%07)9AY7aJoFM4!J}0VU0jU|o &vKyA{JH?n^Bn');
define('SECURE_AUTH_SALT', 'Q@/Y-?p/B-v.%&fP6{E;C<`5!G;lJ2i &e=L->B|UX:0OceRHnr7aBzlyy2E4w%m');
define('LOGGED_IN_SALT',   'A}+mU:_6m+or;RN2][44g7gaSI/*@b$v&v.~HZnPE,&D+{tY;W&|3Oa7=I*Q;[9A');
define('NONCE_SALT',       '<G++N190l-V(sx2S3mt0j}e+5?g *I7-5--Y8{6<3:NZyoJky-G7O`vAtc)9M:%_');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
