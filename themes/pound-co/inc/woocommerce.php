<?php

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 3 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );



function poundco_shop_page_title(){
    echo '<h1>Shop All</h1>';
}

add_action( 'woocommerce_before_main_content', 'poundco_shop_page_title', 1 );



