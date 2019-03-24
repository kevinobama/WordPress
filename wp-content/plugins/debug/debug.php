<?php
/**
 * @package Debug
 * @version 1.7.1
 */

/*
Plugin Name: Debug
Plugin URI: http://wordpress.org/plugins/debug/
Description: Debug is good.
Author: kevin gates
Version: 1.7.1
Author URI: http://github.com/kevinobama/
*/

function debug_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "I'm keivn
I'm bill gates";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function debug() {
	$chosen = debug_get_lyric();
	echo "<p id='dolly'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'debug' );

// We need some CSS to position the paragraph
function debug_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	.block-editor-page #dolly {
		display: none;
	}
	</style>
	";
}

add_action( 'admin_head', 'debug_css' );
