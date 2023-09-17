<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request) {
        $producstList= DB::select('CALL GetProductsByKeyword(?)', [$request->search]);
        return view('site.pages.shop.search');
    }
}
