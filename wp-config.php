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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_techis' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8Ks4G<<ggqrg6ZYm-0B+b>d*7Bbs7?0:a9znnw1R7yxGVHn2!Vga7rT`>L 3iKO?' );
define( 'SECURE_AUTH_KEY',  'jqSa:>OXl%UB]6Q[4+2:=AEF0W>5`4Q#d4o>]NV26_a.!laEck<KuGJ1b;j$0cJl' );
define( 'LOGGED_IN_KEY',    '!PI:UfhQ&,Y;:R:h`8Z2I(;1$fCTX`B*zX U9fqj^^Pxc%JfwBbKO(iTA4?U2M;q' );
define( 'NONCE_KEY',        'T {e<Z}DR[~0UTcvxLtrv 8}B2|W::a/tSh?%htVT$+!>Y=^)lqeS3TC~e)3|!.9' );
define( 'AUTH_SALT',        'Rvl!y=(o;V^{4;iHLl3hI_Y]jK%t&j|,VwAvmcZW[5*L>-w0Pqoz@Fa>n0]3w~K@' );
define( 'SECURE_AUTH_SALT', 'g)%m}trAr--(Z?,Vd^xU24pNZ.NwIs_tNeA6auO8;X-*r:(y2QehU`Zu+tLp6SK[' );
define( 'LOGGED_IN_SALT',   'xx:rnN{~noyQf3k;}O v{KRocHAZBIG+Hy8,DXn#{A8aqP#mOgEjX,4@7MW**>h#' );
define( 'NONCE_SALT',       '4teNo9-=S0wa|nv|~dqA9oW~IxDk(D}pGeYN9F_;Zblb9er?CgogyhXk8JLF]N/P' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'techis_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
