<?php

namespace App\Http\Controllers;

use App\Shops\Shopify;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use PHPShopify\ShopifySDK;
use Log;
use Validator;

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
        // Validate 
        $validator = Validator::make($request->all(),[
            'active'=>'required',
            'limit'=>'required',
            'fields'=>'required'
         ]);

         if ($validator->fails()) {    
            return response()->json(['status' => 'error', 'message' =>$validator->errors(), 'code' => 422]);
        }

        //Get the Shopify Products, catch/log exception
        $products = [];
        try {
           $shopify = new Shopify();

            $shopifySDK = $shopify->getShopifySDK();

            $filterParameters = [
                'active' => $request->get('active'),
                'limit' =>$request->get('limit'),
                'fields' => $request->get('fields'),
            ];

            $products = $shopifySDK->Product()->get($filterParameters);
            return response()->json($products);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return response()->json(['status' => 'error', 'message' => $e->getMessage(), 'code' => 500]);
        }


        //Return a JSON Response 
    }
}
