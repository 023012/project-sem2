<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ProductCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Product_Comments = new ProductComment();
        $ProductComments = $Product_Comments->index();
        return view('admin.pages.product-comments.index', [
            'product_comments' => $ProductComments,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.product-comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductComment $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductComment $productcomments)
    {
        //
        $productcomments->delete();
        return redirect()->route('admin.product-comments.index')
            ->with('success','Xóa thành công');
        ;
    }
}
