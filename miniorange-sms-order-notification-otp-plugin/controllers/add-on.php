<?php

    $woocommerce_url = add_query_arg( array('addon'=> 'woocommerce_notif'), sanitize_text_field($_SERVER['REQUEST_URI'] ));
    $custom			 = add_query_arg( array('addon'=> 'custom'	         ), sanitize_text_field($_SERVER['REQUEST_URI'] ));
    $ultimate_mem	 = add_query_arg( array('addon'=> 'um_notif'         ), sanitize_text_field($_SERVER['REQUEST_URI'] ));
    $ultimate_mem_pr = add_query_arg( array('addon'=> 'umpr_notif'       ), sanitize_text_field($_SERVER['REQUEST_URI'] ));
    $woocommerce_pr  = add_query_arg( array('addon'=> 'wcpr_notif'       ), sanitize_text_field($_SERVER['REQUEST_URI'] ));
    
    


    if(isset( $_GET[ 'addon' ])) return;

    include MOV_DIR . 'views/add-on.php';