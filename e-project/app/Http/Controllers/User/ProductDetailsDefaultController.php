<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailsDefaultController extends Controller
{
    public function index(){
        return view('site.pages.product-details-default');
    }
}
