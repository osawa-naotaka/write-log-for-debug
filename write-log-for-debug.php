<?php
/*
  Plugin Name: Write Log for Debug
  Plugin URI:
  Description: export write_log function when WP_DEBUG
  Version: 1.0.0
  Author: Osawa Naotaka
  Author URI: https://github.com/osawa-naotaka/write-log-for-debug
  License: MIT
 */

function write_log( $data )
{
    if ( true === WP_DEBUG ) {
        if ( is_array( $data ) || is_object( $data ) ) {
            error_log( print_r( $data, true ) );
        } else {
            error_log( $data );
        }
    }
}
