<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productComments = DB::table('product_comments as pc')
            ->select('pc.id', 'products.name as product_name', 'pc.message', 'users.name as user_name', 'pc.rating')
            ->join('products', 'pc.product_id', '=', 'products.id')
            ->join('users', 'pc.user_id', '=', 'users.id')
            ->get();

        return view('admin.pages.product-comments.index', ['productComments' => $productComments]);
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
    public function destroy(ProductComment $productComments)
    {
        //
        $productComments->delete();
        return redirect()->route('admin.product-comments.index')
        ;
    }
}
