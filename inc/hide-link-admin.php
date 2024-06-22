<?php
/**
 * It fires on the backend.

 * @package Hide Link
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

add_filter( 'plugin_action_links_hide-link/hide-link.php', function ( $links ) {
    // Add a settings link to the action links in the plugins page.
    $settings_link = ' | <a class="htoh-upgrade" style="color:#B07700;font-weight:bold" target="_htoh" rel="noopener" href="https://shop.josemortellaro.com/downloads/hide-link-pro/">'. __( 'Upgrade','hide-link' ). ' <span style="position:relative;top:-10px;' . ( is_rtl() ? 'right' : 'left' ) . ':-6px;display:inline-block">👑</span></a>';
    array_push( $links, $settings_link );
    return $links;
  } );