<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function index(){
        $blogs = DB::table('blogs')->get();
        return view('site.pages.blogs', [
            'blogs' => $blogs,
        ]);
    }
    public function blog_single(){
        $blogs = DB::table('blogs');
        return view('site.pages.blog-single',[
            'blogs'=>$blogs,
        ]);
    }

    public function showBlogDetail(Blogs $blog){
        $blogDetails = DB::table('blogs')->where('id', $blog->id)->first();
        return view('site.pages.blog-single',[
            'blogDetails' => $blogDetails
        ]);
    }
}