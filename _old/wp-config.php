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
define('DB_NAME', 'wordpress_glitter');

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
define('AUTH_KEY',         'Ky&S6/skkq*0J~ /lntj}f[CGo+AHDh=^_zt4QhtQuW[HYrXGhdd1E^Q)_^D@7f@');
define('SECURE_AUTH_KEY',  '8Y_j2yY9YxJdoZNFQHpg&^A7;a54J)L+8~4E/X#3<r9>yv0lx;-7x[rHIL*W0tIA');
define('LOGGED_IN_KEY',    'bTaGEu|nra+m2 6aVujgbA1rFs9_|M;0R^o|.phC$z|$OQZ8V|1o-}-vazj$Boq>');
define('NONCE_KEY',        'kg r^h-i3N-5P+TX*]o=7jZ?_by{k/]Yb-/cq6=_zBZs7L;Oi=|prD),9/!+zVzo');
define('AUTH_SALT',        '5-%;>a!5(M;j)z/tS1oenMA7{0Bk<n?H4z88F0/7i(D*G/H_~a,)rfo,=.}3!Ki1');
define('SECURE_AUTH_SALT', 'M3DWz]~.d2KX+ZClI)*h2uIAB|+<&.EuY-)j3Q^mcDq;8Jg:r4)VIe%Jbzq&~tu?');
define('LOGGED_IN_SALT',   '&:ny[!(aenp6ys_>bz;!z}j+H$-yj|yEQyl$zX5; $0FZm3>#j^KlFs_5ii|?`P+');
define('NONCE_SALT',       '(n~|n{Di:3{z1/~Q@t[25yN+UqIWw(G57`zefp4C(x(slFI_kT3Y|Omlf[ K,(he');

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
