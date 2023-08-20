<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Paginator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $productList = new Product();
//        $products =  $productList::all();
        $products = DB::table('products as p')
            ->select('p.id', 'p.thumbnail', 'p.name', 'c.name as category', 'd.name as discount', 'p.price', 'p.quantity', 'p.status', 'p.featured', 'p.active')
            ->join('categories as c', 'p.category_id', '=', 'c.id')
            ->join('discounts as d', 'p.discount_id', '=', 'd.id')
            ->get();
        return view('admin.pages.product.index', ['products' => $products]);
//        return view('admin.pages.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        $discounts = DB::table('discounts')->get();
        return view('admin.pages.product.create', [
            'categories' => $categories,
            'discounts' => $discounts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
