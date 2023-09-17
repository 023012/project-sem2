<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class ShopController extends Controller
{

    public function shop(Request $request)
    {
        $categories = DB::table('categories')->get();
        $products = DB::table('project_sem2.products_list as p')
            ->orderBy('p.created_at', 'desc')
            ->paginate(15);
        return view('site.pages.shop.index', compact('categories', 'products'));
    }

    public function search(Request $request)
    {
        $categories = DB::table('categories')->get();
        $keyword = $request->input('keyword');

        $results = DB::select('CALL GetProductsByKeyword(?)', [$keyword]);
        $productCount = count($results);

        return view('site.pages.shop.search', compact('results', 'keyword', 'productCount', 'categories'));
    }

    public function sortProducts(Request $request)
    {
        $categories = DB::table('categories')->get();

        $sortOptions = [
            'price-asc' => 'Giá từ thấp đến cao',
            'price-desc' => 'Giá từ cao đến thấp',
            'name-asc' => 'Tên tăng dần A-Z',
            'name-desc' => 'Tên giảm dần Z-A',
        ];
        $sortOption = $request->input('sort_option');

        switch ($sortOption) {
            case 'price-asc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.price', 'asc')
                    ->paginate(18);
                break;
            case 'price-desc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.price', 'desc')
                    ->paginate(18);

                break;
            // Thêm các tùy chọn sắp xếp khác ở đây
            case 'name-asc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.name', 'asc')
                    ->paginate(18);
                break;
            case 'name-desc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.name', 'desc')
                    ->paginate(18);
                break;

            default:
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.created_at', 'desc')
                    ->paginate(12);
                break;
        }

        return view('site.pages.shop.index', compact('products', 'sortOptions', 'categories'));
    }

    public function filterByPrice(Request $request)
    {
        $categories = DB::table('categories')->get();
        $priceMax = $request->input('price_max');
        $priceMin = $request->input('price_min');

        $products = DB::select('CALL GetProductsByPrice(?,?)', [$priceMin, $priceMax]);
        $productCount = count($products);

        return view('site.pages.shop.filter-by-price', [
            'categories' => $categories,
            'products' => $products,
            'productCount' => $productCount,
            'priceMin'=>$priceMin,
            'priceMax'=>$priceMax]);
    }

    public function showProductDetail(Product $product)
    {
        $productDetails = DB::select('CALL ShowProductDetails(?)', [$product->id]);
        return view('site.pages.shop.product', compact('productDetails'));
    }

    public function showProductByCategory(Category $category)
    {
        $categories = DB::table('categories')->get();
        $productsList = DB::select('CALL GetProductsByCategory(?)', [$category->id]);
        $productCount = count($productsList);
        $CategoryProduct = DB::table('categories')->where('id', '=', $category->id)->value('name');
        return view('site.pages.shop.category', compact('productsList',
            'categories', 'productCount', 'CategoryProduct'));
    }

}
