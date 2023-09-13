<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('site.pages.homepage');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $results = DB::select('CALL GetProductsByKeyword(?)', [$keyword]);
        $productCount = count($results);

        return view('site.pages.shop.search', compact('results', 'keyword','productCount'));
    }
}
