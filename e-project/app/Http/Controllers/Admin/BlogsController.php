<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;


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

    public function show(Blogs $blog){
        $blogDetails = DB::table('blogs')->where('id', $blog->id)->get();
        return view('admin.pages.blogs.details',[
            'blogDetails' => $blogDetails
        ]);
    }

    public function create(){
        return view('admin.pages.blogs.create');
    }

    public function store(Request $request){
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $ext = $request->file_upload->getClientOriginalExtension();
            $file_name = time() . '-' . 'blogs.' . $ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        $blog = new Blogs();
        $blog->image = $request->image;
        $blog->write_by = $request->write_by;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->tag = $request->tag;
        $blog->save();
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Thêm mới thành công');

    }

    public function edit(Blogs $blogs){
        return view('admin.pages.blogs.edit',[
            'blogs'=>$blogs,
        ]);
    }

    public function update(Blogs $blogs, Request $request){
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $ext = $request->file_upload->getClientOriginalExtension();
            $file_name = time() . '-' . 'blogs.' . $ext;
            $file->move(public_path('uploads'), $file_name);
            $blogs->image = $file_name;
        }


        $blogs->image = $request->image;
        $blogs->write_by = $request->write_by;
        $blogs->title = $request->title;
        $blogs->content = $request->content;
        $blogs->tag = $request->tag;
        $blogs->save();
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Cập nhật thông tin sản phẩm thành công!');
    }

    public function destroy(Blogs $blogs){
        $blogs->delete();
        return redirect()->route('admin.blogs.index')
            ->with('success', 'Ẩn đi thành công');
    }
}
