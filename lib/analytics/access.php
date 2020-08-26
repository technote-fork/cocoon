<?php //アクセスをカウントする
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */

if ( empty( $_GET['post_id'] ) || empty( $_GET['post_type'] ) || empty( $_GET['nonce'] ) ) {
	return;
}
require_once( '../../../../../wp-load.php' );
$post_id   = $_GET['post_id'] - 0;
$post_type = $_GET['post_type'];
$nonce     = $_GET['nonce'];
if ( wp_verify_nonce( $nonce, 'access-' . $post_id ) ) {
	logging_page_access( $post_id, $post_type );
}
