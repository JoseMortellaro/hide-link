<?php
/**
 * Bootstrap for Hide Link PRO.

 * @package Hide Link PRO
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

if( is_admin() ) {
    require_once EOS_HL_PLUGIN_DIR . '/inc/hide-link-admin.php';
}
elseif( class_exists( 'WP_HTML_Tag_Processor' ) ) {
    require_once EOS_HL_PLUGIN_DIR . '/inc/hide-link-front.php';
}
