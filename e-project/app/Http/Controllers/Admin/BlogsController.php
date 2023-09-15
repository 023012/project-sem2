<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blogs;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = new Blogs();
        $blog = $blogs::all();
        return view('admin.pages.blogs.index',[
            'blogs' => $blog,
        ]);
    }

    public function create(){
        return view('admin.pages.blogs.create');
    }

    public function store(Request $request){
        $blog = new Blogs();
        $blog->write_by = $request->write_by;
        $blog->image = $request->image;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->tag = $request->tag;
        $blog->save();
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Thêm mới thành công');

    }

    public function destroy(Blogs $blogs){
        $blogs->delete();
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Ẩn đi thành công');
    }
}
