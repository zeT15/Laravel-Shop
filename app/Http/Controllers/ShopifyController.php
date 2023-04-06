<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Signifly\Shopify\Shopify;

class ShopifyController extends Controller
{
    public function show(): View
    {
        return view('shop');
    }

    public function test(): View
    {
        $shopify = \Signifly\Shopify\Factory::fromConfig();
        $count = $shopify->getProductsCount();
        return view('result', ['count' => $count]);
    }
}