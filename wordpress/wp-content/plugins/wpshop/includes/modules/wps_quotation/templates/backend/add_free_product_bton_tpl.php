<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<a href="<?php print wp_nonce_url( admin_url( 'admin-ajax.php?width=600&height=550&action=wps_free_product_form_page_tpl&oid='.$order_id ), 'wps_free_product_form_page_tpl', '_wpnonce' ); ?>" class="wps-bton-second-mini-rounded alignRight thickbox" title="<?php _e( 'Add free product', 'wpshop' ); ?>" id="add_free_product_bton"><?php _e( 'Add free product', 'wpshop' ); ?></a>
