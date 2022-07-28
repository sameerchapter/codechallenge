<?php

namespace App\Shops;
use PHPShopify\ShopifySDK;

class Shopify
{

    protected ShopifySDK $shopifySDK;

    public function __construct()
    {
        $this->shopifySDK = $this->initSdk();
    }
    
    /**
     * initSDK
     * Build the shopifySDK
     * @param none
     * @return ShopifySDK The configured ShopifySDK
     */
    private function initSDK():ShopifySDK
    {

        /**
         * TO DO
         * Insert the config variables from config/shopify.php
         */
        
        $config = [
            'AccessToken' => "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", #Insert config
            'ShopUrl' => "https://pine-roots.myshopify.com" #Insert config
        ];

        $shopifySDK = new ShopifySDK($config);
        return $shopifySDK;
    }

    /**
     * Return the ShopifySDK
     * @param none
     * @return ShopifySDK
     */
    public function getShopifySDK():ShopifySDK
    {
        return $this->shopifySDK;
    }
}