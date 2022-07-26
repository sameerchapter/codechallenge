<?php

namespace App\Http\Controllers;

use App\Shops\Shopify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPShopify\ShopifySDK;

class ProductController extends Controller
{
    /**
     * Get the products
     * 
     * @param Request request can contain the searchTitle or other parameters
     * @return Response json response with the products or an error. Include a HTTP Status code.
     */
    public function index(Request $request)
    {
        //Validate Request

        //Get the Shopify Products, catch/log exception
        $products = [];

        //Return a JSON Response 
    }
}
