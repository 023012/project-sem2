<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){
        $products = DB::table('products')
        ->select( 'categories.id as category_id', 'discounts.id as discount_id',
                   'categories.name as category', 'discounts.name as discount',
                  'discounts.discount_percent as discount_percent', 'products.*')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('discounts', 'products.discount_id', '=', 'discounts.id')
        ->orderBy('id','asc')
        ->simplePaginate(12);

        return view('site.pages.shop', [
            'products' => $products,
        ]);
    }
    public function showProductDetail($id){
        $product=Product::where('id', '=', $id)
        ->select('*')->first();
        return view('site.pages.product',[
            'product'=>$product
        ]);

    }
    public function sortPriceLowToHight(Request $request){

    }

}
