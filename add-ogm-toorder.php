<?php
/**
 * Plugin Name: setOGM
 * Description: setOGM
 * Version: 1.1
 * Text Domain: setOGM
 * Author: Gevorg Minasyan
 */
 
 add_action( 'woocommerce_new_order', 'setOGM' );
function setOGM( $order_id ) {
    $ogm = calculateOGM( $order_id );
    update_post_meta($order_id,'OGM',$ogm);
}

function calculateOGM($number)
{
$ordernumber = str_pad($number,10,"0",STR_PAD_LEFT);
$ordernumber = intval($ordernumber);
$remainder =  $ordernumber%97;
if($remainder ==0 )
{
$remainder = 97;
}
return $tempoutput = str_pad($number,10,"0",STR_PAD_LEFT).strval(str_pad($remainder,2,"0",STR_PAD_LEFT));

}
