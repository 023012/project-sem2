<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('site.pages.checkout', compact('cartItems'));
    }

    public function checkout(Request $request)
    {
        $cartItems = \Cart::getContent();

        // Tạo đơn hàng
        $order = Order::create([
            'user_id' => Auth::id(),
            'status' => $request->status ?? 0,
            'message' => $request->message,
        ]);

        // Thêm chi tiết đơn hàng
        foreach ($cartItems as $item) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $item->id, // Chú ý sửa đổi này nếu bạn lưu trữ product_id trong giỏ hàng
                'quantity'   => $item->quantity,
                'price' => $item->price,
            ]);
        }

        // Xóa giỏ hàng sau khi đã tạo đơn hàng
        \Cart::clear();

        return redirect()->route('site.checkout.success');
    }

    public function success(){
        return view('site.pages.success');
    }
}
