<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $latestProducts = DB::table('products_list')->where('active','=', 1)
            ->orderBy('created_at', 'desc')->limit(12)->get();
        $productsFeatured = DB::table('products_list')->where('active','=', 1 ,)
            ->where('featured','=', 1)->limit(8)->get();
        return view('site.pages.homepage',
            compact('latestProducts', 'productsFeatured'));
    }
}
