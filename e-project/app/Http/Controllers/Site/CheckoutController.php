<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $cartItems = \Cart::getContent();

        // Tạo đơn hàng mới
        $order = new Order();
        $order->order_number = uniqid(); // Tạo số đơn hàng duy nhất
        $order->user_id = Auth::id();
        $order->item_count = count($cartItems);
        $order->status = 'pending'; // Trạng thái mặc định là "pending"
        $order->notes = $request->notes;
        $order->payment_status = 0; // Mặc định là đã thanh toán
//        $order->payment_method = $request->payment_method; // Lấy phương thức thanh toán từ biểu mẫu
        $order->save();

        // Thêm chi tiết đơn hàng
        foreach ($cartItems as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $item->id; // Thay đổi nếu bạn lưu trữ product_id trong giỏ hàng
            $orderDetail->quantity = $item->quantity;
            $orderDetail->price = $item->price;
            $orderDetail->save();
        }

        // Xóa giỏ hàng sau khi đã tạo đơn hàng
        \Cart::clear();

        return redirect()->route('site.checkout.success');
    }

    public function success(){
        return view('site.pages.success');
    }
}
