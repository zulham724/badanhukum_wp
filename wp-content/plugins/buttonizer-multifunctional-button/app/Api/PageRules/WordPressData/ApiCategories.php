<?php

namespace Buttonizer\Api\PageRules\WordPressData;

/**
 * WordPress Buttonizer API
 * 
 * @endpoint /wp-json/buttonizer/pagerules/categories
 * @methods GET
 */
class ApiCategories
{
    /**
     * Register route
     */
    public function registerRoute()
    {
        register_rest_route( 'buttonizer', '/page_rules/categories', [ [
            'methods'             => [ 'GET' ],
            'args'                => [
            'nonce' => [
            'validate_callback' => function ( $value ) {
            return wp_verify_nonce( $value, 'wp_rest' );
        },
            'required'          => true,
        ],
        ],
            'callback'            => [ $this, 'get' ],
            'permission_callback' => function () {
            return current_user_can( 'edit_posts' ) && wp_get_current_user()->ID !== 0;
        },
        ] ] );
    }
    
    /**
     * Get page rules categories
     */
    public function get()
    {
        return \Buttonizer\Api\Api::needButtonizerPremium();
    }

}