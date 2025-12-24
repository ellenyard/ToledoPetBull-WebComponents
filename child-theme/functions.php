<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
    wp_enqueue_style( 'astra-theme-css', get_template_directory_uri() . '/style.css', array(), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
    wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/* ===========================================
   PERFORMANCE OPTIMIZATIONS
   =========================================== */

/**
 * Remove Dashicons for non-logged-in users
 * Saves ~35 KiB on every page load
 */
function remove_dashicons_for_visitors() {
    if ( !is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}
add_action( 'wp_enqueue_scripts', 'remove_dashicons_for_visitors', 100 );

/**
 * Disable WooCommerce scripts and styles on non-shop pages
 * Significantly improves performance on non-shop pages
 */
function disable_woocommerce_non_shop() {
    // Only run if WooCommerce is active
    if ( !class_exists( 'WooCommerce' ) ) {
        return;
    }
    
    // Don't disable on shop-related pages
    if ( is_shop() || is_product() || is_cart() || is_checkout() || is_account_page() ) {
        return;
    }
    
    // Dequeue WooCommerce styles
    wp_dequeue_style( 'woocommerce-layout' );
    wp_dequeue_style( 'woocommerce-smallscreen' );
    wp_dequeue_style( 'woocommerce-general' );
    
    // Dequeue WooCommerce scripts
    wp_dequeue_script( 'wc-cart-fragments' );
    wp_dequeue_script( 'woocommerce' );
    wp_dequeue_script( 'wc-add-to-cart' );
}
add_action( 'wp_enqueue_scripts', 'disable_woocommerce_non_shop', 99 );

/**
 * Disable Beaver Builder assets on non-Beaver Builder pages
 * Only loads BB resources on pages that actually use Beaver Builder
 */
function dequeue_beaver_assets_on_non_bb_pages() {
    // First check if Beaver Builder is even active
    if ( !class_exists( 'FLBuilderModel' ) ) {
        return;
    }
    
    // Only load on pages that actually use Beaver Builder
    if ( !is_singular() || !FLBuilderModel::is_builder_enabled() ) {
        wp_dequeue_style( 'fl-builder-layout' );
        wp_dequeue_script( 'fl-builder-layout-init' );
        wp_dequeue_style( 'fl-builder-layout-styles' );
        wp_dequeue_script( 'jquery-magnificpopup' );
        wp_dequeue_style( 'jquery-magnificpopup' );
    }
}
add_action( 'wp_enqueue_scripts', 'dequeue_beaver_assets_on_non_bb_pages', 100 );

/* ===========================================
   CUSTOM FUNCTIONS
   =========================================== */

/**
 * Add your custom functions below this line
 */
