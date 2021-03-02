<?php
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 3 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );



