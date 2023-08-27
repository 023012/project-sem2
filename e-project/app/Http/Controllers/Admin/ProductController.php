<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
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
            ->orderBy('p.id', 'desc')
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
    public function store(Request $request)
    {
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $ext = $request->file_upload->getClientOriginalExtension();
            $file_name = time() . '-' . 'product.' . $ext;
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['thumbnail' => $file_name]);

        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->thumbnail = $request->thumbnail;
        $product->category_id = $request->category_id;
        $product->discount_id = $request->discount_id;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->material = $request->material;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->high = $request->high;
        $product->status = $request->status;
        $product->featured = $request->featured;
        $product->active = $request->active;

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Thêm sản phẩm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.pages.product.details');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = DB::table('categories')->get();
        $discounts = DB::table('discounts')->get();
        return view('admin.pages.product.edit', [
            'categories' => $categories,
            'discounts' => $discounts,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if ($request->has('file_upload')) {
            $file = $request->file_upload;
            $ext = $request->file_upload->getClientOriginalExtension();
            $file_name = time() . '_' . 'product' . $ext;
            $file->move(public_path('uploads'), $file_name);
            $product->thumbnail = $file_name;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_id = $request->discount_id;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->length = $request->length;
        $product->width = $request->width;
        $product->material = $request->material;
        $product->high = $request->high;
        $product->status = $request->status;
        $product->featured = $request->featured;
        $product->active = $request->active;

        $product->save();

        return redirect()->route('admin.products.index')
            ->with('success', 'Cập nhật thông tin sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->active = 0;
        $product->save();
        return redirect()->route('admin.products.index')
            ->with('success', 'Ẩn đi thành công');
    }
}
