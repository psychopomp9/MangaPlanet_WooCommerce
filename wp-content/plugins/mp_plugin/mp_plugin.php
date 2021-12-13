<?php
/*
Plugin Name: Manga Planet Plugin
Description: A Plugin used in Manga Planet WooCommerce
Version: 1.0.0
*/

//filter phone number based on business hours
function contactN(){
    $time = date('H');
    $contact = 4374433003;
    if($time >= 7 && $time < 20){
        $contact = 4373344004;
    }
    echo "Contact: $contact";
}

add_action('wp_footer', 'contactN');

//check if there are items in cart and put notice on store and item pages if there are
function cart_item(){
    if (WC()->cart->get_cart_contents_count() != 0){
        wc_print_notice('You left some items in your cart!', 'notice');
    }
}

add_action('woocommerce_before_main_content', 'cart_item');


//free shipping notification on cart page
function cart_page(){
    if (WC()->cart->get_cart_contents_count() != 0){
        if(WC()->cart->cart_contents_total <= 25){
            $total = WC()->cart->cart_contents_total;
            $free_shipping = 25 - $total;
            wc_print_notice("Add $ $free_shipping worth items to enjoy free shipping!", 'notice');
        }else{
            wc_print_notice('Your shipping charges on us, enjoy!', 'success');
        }
        
    }
}

add_action('woocommerce_before_cart','cart_page');

//add notice on checkout page to fill required fields
function required_fields(){
    wc_print_notice('Please fill all the fields which has * on it', 'error');
}

add_action('woocommerce_checkout_before_customer_details', 'required_fields');
?>