<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){
        $products = DB::table('products')->select( 'categories.id as category_id', 'discounts.id as discount_id', 'categories.name as category', 'discounts.name as discount', 'discounts.discount_percent as discount_percent', 'products.*')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('discounts', 'products.discount_id', '=', 'discounts.id')
        ->simplePaginate(9);

        return view('site.pages.shop', [
            'products' => $products,
        ]);



        // $products = DB::table('products')->get();
        // $categories = DB::table('categories')->get();
        // return view('site.pages.shop',[
        //     'categories'=>$categories,
        //     'products' => $products,
        // ]);
    }
}
