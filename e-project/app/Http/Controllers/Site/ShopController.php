<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{

    public function showProductDetail(Product $product){
        $productDetails= DB::select('CALL ShowProductDetails(?)', [$product->id]);
        return view('site.pages.shop.product',[
            'productDetails'=>$productDetails
        ]);

    }


    public function index(Request $request){

        $sortOptions = [
            'price-asc' => 'Giá từ thấp đến cao',
            'price-desc' => 'Giá từ cao xuống',
            'name-asc' => 'Tên tăng dần A-Z',
            'name-desc' => 'Tên giảm dần Z-A',
            'created-at-asc' => 'Ngày gần nhất',
        ];
        $sortOption = $request->input('sort_option');

        switch ($sortOption) {
            case 'price-asc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.price', 'asc')
                    ->simplePaginate(18);
                break;
            case 'price-desc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.price', 'desc')
                    ->simplePaginate(18);

                break;
            // Thêm các tùy chọn sắp xếp khác ở đây
            case 'name-asc':
                $products=DB::table('project_sem2.products_list as p')
                    ->orderBy('p.name', 'asc')
                    ->simplePaginate(18);
                break;
            case 'name-desc':
                $products=DB::table('project_sem2.products_list as p')
                    ->orderBy('p.name', 'desc')
                    ->simplePaginate(18);
                break;
            case 'created-at-asc':
                $products=DB::table('project_sem2.products_list as p')
                    ->orderBy('p.created_at', 'asc')
                    ->simplePaginate(18);
                break;

            default:
                $products=DB::table('project_sem2.products_list as p')
                    ->orderBy('p.created_at', 'asc')
                    ->simplePaginate(18);
                break;
        }

        return view('site.pages.shop.index', compact('products','sortOptions'));
    }

}
