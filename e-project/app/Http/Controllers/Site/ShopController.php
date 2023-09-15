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
//            'created-at-asc' => 'Ngày gần nhất',
//            'created-at-desc' => 'Ngày xa nhất',
//            'featured' => 'Đặc tính',

        ];
//        dd($sortOptions);
        $sortOption = $request->input('sort_option');

        // Kiểm tra giá trị tùy chọn và thực hiện xử lý tương ứng
        switch ($sortOption) {
            case 'price-asc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.price', 'asc')
                    ->simplePaginate(15);
                break;
            case 'price-desc':
                $products = DB::table('project_sem2.products_list as p')
                    ->orderBy('p.price', 'desc')
                    ->simplePaginate(15);

                break;
            // Thêm các tùy chọn sắp xếp khác ở đây
            case 'name-asc':
                $products=DB::table('project_sem2.products_list as p')
                    ->orderBy('p.name', 'asc')
                    ->simplePaginate(15);
                break;
            case 'name-desc':
                $products=DB::table('project_sem2.products_list as p')
                    ->orderBy('p.name', 'desc')
                    ->simplePaginate(15);
                break;

//            case 'created-at-asc':
//                $products=DB::table('project_sem2.products_list as p')
//                    ->orderBy('p.created_at', 'asc')
//                    ->simplePaginate(15);
//                break;
//            case 'created-at-desc':
//                $products=DB::table('project_sem2.products_list as p')
//                    ->orderBy('p.created_at', 'desc')
//                    ->simplePaginate(15);
//                break;

//            case 'featured':
//                $products=DB::table('project_sem2.products_list as p')
//                    ->orderBy('p.id', 'asc')
//                    ->simplePaginate(16);
//                break;

            default:
                // Mặc định là sắp xếp theo giá từ thấp đến cao
//                $products = DB::table('products')
//                    ->select( 'categories.id as category_id', 'discounts.id as discount_id',
//                        'categories.name as category', 'discounts.name as discount',
//                        'discounts.discount_percent as discount_percent', 'products.*')
//                    ->join('categories', 'category_id', '=', 'categories.id')
//                    ->join('discounts', 'discount_id', '=', 'discounts.id')
//                    ->orderBy('id','desc')
                $products=DB::table('project_sem2.products_list')
                    ->simplePaginate(15);
                break;
        }

        return view('site.pages.shop.index', compact('products','sortOptions'));
    }

}
