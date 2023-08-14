<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomerController extends Controller
{
    public function index(){
        return view('site.pages.homepage');
    }
}
