<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsDefaultController extends Controller
{
    public function index(){
   
        $products = DB::table('products as p')
            ->select('p.id', 'p.thumbnail', 'p.name', 'c.name as category', 'd.name as discount', 'p.price', 'p.quantity', 'p.status', 'p.featured', 'p.active')
            ->join('categories as c', 'p.category_id', '=', 'c.id')
            ->join('discounts as d', 'p.discount_id', '=', 'd.id')
            ->get();
            return view('site.pages.product-details-default', ['products' => $products]);
    }
}
