<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('site.pages.blog-grid-sidebar-left');
    }
    public function blog_single_sidebar_left(){
        return view('site.pages.blog-single-sidebar-left');
    }
}