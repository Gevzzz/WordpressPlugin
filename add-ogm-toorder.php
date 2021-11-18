<?php
/**
 * Plugin Name: add-ogm-toorder
 * Description: add-ogm-toorder
 * Version: 1.1
 * Text Domain: add-ogm-toorder
 * Author: Enigma Tech
 */
 
 add_action( 'woocommerce_new_order', 'add_ogm_to_order' );
function add_ogm_to_order( $order_id ) {
    $ogm = calculateOGM( $order_id );
    update_post_meta($order_id,'OGM',$ogm);
}

function calculateOGM($number)
{
$ordernumber = str_pad($number,10,"0");
$ordernumber = intval($ordernumber);
$remainder =  $ordernumber%97;
if($remainder ==0 )
{
$remainder = 97;
}
return $tempoutput = strval($ordernumber).strval($remainder);

}