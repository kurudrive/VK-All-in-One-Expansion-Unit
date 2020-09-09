<?php
/**
 * Display IE Alert
 *
 * @package VK All in One Expansion Unit
 */

/**
 * Judgment IS IE
 */
function veu_is_ie() {
	$ua = isset( $_SERVER['HTTP_USER_AGENT'] ) ? mb_strtolower( $_SERVER['HTTP_USER_AGENT'] ) : '';  // すべて小文字にしてユーザーエージェントを取得.
	if ( strpos( $ua, 'msie' ) !== false || strpos( $ua, 'trident' ) !== false ) {
		return true;
	}
	return false;
}

/**
 * IE Alart HTML
 */
function veu_get_alert_html() {
	$html  = '<div class="ie_alert">';
	$html .= '<h1 class="ie_alert__title">' . __( 'The browser that you use is not safe.', 'vk-all-in-one-expansion-unit' ) . '</h1>';
	$html .= '<div class="ie_alert__body">';
	$html .= '<p>';
	$html .= __( 'Internet Explorer, you are using, is old browser, Microsoft also reports that use is dangerous.', 'vk-all-in-one-expansion-unit' );
	$html .= __( 'This website is also not guaranteed to display on Internet Explorer.', 'vk-all-in-one-expansion-unit' );
	$html .= '<br>';
	$html .= __( 'Plese use The latest modern browser ( <a href="https://www.microsoft.com/ja-jp/edge" target="_blank" rel="noopener">Microsoft Edge</a>, <a href="https://www.google.co.jp/chrome/index.html" target="_blank" rel="noopener">Google Chrome</a> and so on ).', 'vk-all-in-one-expansion-unit' );
	$html .= '</p>';
	$html .= '</div>';
	$html .= '</div>';
	return $html;
}

/**
 * Insert IE Alert.
 */
function veu_insert_alert() {
	if ( veu_is_ie() ) {
		?>
		<style type="text/css">
		.ie_alert {
			background-color:#c00;
			color:#fff;
			padding:10px;
			position: relative;
			z-index: 9999;
		}
		.ie_alert a {
			color:#fff;
			text-decoration:underline;
		}
		.ie_alert__title {
			font-size:16px;
			text-align:center;
		}
		.ie_alert__body p {
			margin:0 0 5px;
			padding:0;
			font-size:11px;
			text-align:center;
		}
		</style>
		<?php
		echo wp_kses_post( veu_get_alert_html() );
	}
}
add_action( 'wp_body_open', 'veu_insert_alert' );