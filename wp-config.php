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
define( 'DB_NAME', 'new_boneedz' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '3}zV9~P$O=Tr1k@RbdO(IlE+|w7_Wqr?WKrXUf3%  cEorkZr&:z(zbNn38]j_fl' );
define( 'SECURE_AUTH_KEY',  'BnV36G8FFI0CIPGmgE[VAdUcY=!9T+c|}rE-0E0[~nmOsg&&qEH* +?AX?>%mP%,' );
define( 'LOGGED_IN_KEY',    'p)pA52pk&TqW.x,xGeb]r6Dim$QP:[q>ZUudDk@[/dT-@=tY;SWb+x!&P%Q*ILRM' );
define( 'NONCE_KEY',        'L!s.S@#[wLF*IK3pQ348Ex2y|5vU~Y,A&cpKbf+67@#?abgEBrno}Fv7oWqxwDOa' );
define( 'AUTH_SALT',        ',LEAvC2&eIjzwtcP86/aopoYHcnG<884kpsDUdIg=RYe5l|Bw3<L&rS-LOy hvSG' );
define( 'SECURE_AUTH_SALT', '6xNF;jy9;Z>gCy`H{:DEUr[Sm`aFpAQm]7 G8U!ye4J3UvJxv$BL8[:?!m:N^olZ' );
define( 'LOGGED_IN_SALT',   'zb#O>/&^057J~v4]A+S(e&#aAV[,B9A=rc1+/a&o:O?U^.XT,)cEi~fxl!U2E)!8' );
define( 'NONCE_SALT',       '$=w|`KTK}T!loj_7[S YRXWbTNRh?=:XZkkA*0(u aFfQf5N#E*o)%p(Zgc;#8M}' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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
