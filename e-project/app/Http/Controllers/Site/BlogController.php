<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('site.pages.blogs');
    }
    public function blog_single(){
        return view('site.pages.blog-single');
    }
}
