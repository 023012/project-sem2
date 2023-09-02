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
        ->simplePaginate(18);

        return view('site.pages.shop.index', [
            'products' => $products,
        ]);
    }
    public function showProductDetail(Product $product){
        $productDetails= DB::select('CALL ShowProductDetails(?)', [$product->id]);
        return view('site.pages.shop.product',[
            'productDetails'=>$productDetails
        ]);

    }
    public function sortPriceLowToHight(Request $request){

    }

}
