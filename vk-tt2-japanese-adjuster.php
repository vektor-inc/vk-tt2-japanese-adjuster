<?php
/**
 * Plugin Name:     VK TT2 Japanese Adjuster（名前は適当に変更してください）
 * Plugin URI:      https://github.com/vektor-inc/vk-tt2-japanese-adjuster
 * Description:
 * Author:
 * Author URI:
 * Text Domain:     vk-tt2-japanese-adjuster
 * Domain Path:     /languages
 * Version:         0.3.0
 * License:         GNU General Public License v2 or later
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package         vk-tt2-japanese-adjuster
 */

/************************************************
 * 独自CSSファイルの読み込み処理
 */


// 公開画面側のCSSの読み込み.
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'vk-tt2-jpn-adjuster',
			plugin_dir_url( __FILE__ ) . '/assets/css/style.css',
			array(),
			filemtime( dirname( __FILE__ ) . '/assets/css/style.css' )
		);
	}
);
// 編集画面側のCSSの読み込み.
add_action(
	'enqueue_block_editor_assets',
	function () {
		wp_enqueue_style(
			'vk-tt2-jpn-adjuster-editor',
			plugin_dir_url( __FILE__ ) . '/assets/css/editor.css',
			array( 'wp-edit-blocks' ),
			filemtime( dirname( __FILE__ ) . '/assets/css/editor.css' )
		);
	}
);
