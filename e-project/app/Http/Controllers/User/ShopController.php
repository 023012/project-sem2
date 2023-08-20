<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();
        return view('site.pages.shop',[
            'products' => $products,
        ]);
    }
}
