<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statusOptions = [
            'pending' => 'pending',
            'processing' => 'processing',
            'completed' => 'completed',
            'decline' => 'decline',
        ];
        $orders = DB::table('orders_list')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.order.index', [
            'orders' => $orders,
            'statusOptions' => $statusOptions
        ]);
    }

//    public function orderConfirmation(Order $order)
//    {
////        viết login cập nhật trạng thái đơn hàng(đang giao, đã giao, đã hủy,...)
//        $order->status = 'processing';
//        $order->save();
////        return view('admin.pages.order.details',['order',$order]);
//        return redirect()->route('admin.order.details', ['orderId' => $order->id])
//            ->with('success', 'Cập nhật ' + $order->order_number + ' thành công trạng thái!');
//    }

    public function show(Order $order)
    {
        $statusOptions = [
            'pending' => 'pending',
            'processing' => 'processing',
            'completed' => 'completed',
            'decline' => 'decline',
        ];
        $totalPrice = DB::table('project_sem2.orders_list')->where('id', $order->id)->value('total_price');
        $users = DB::table('project_sem2.users_orders')->where('id', $order->id)->get();
        $orderDetail = DB::table('project_sem2.chi_tiet_don_hang')->where('id', $order->id)->get();
//        viết login hiển thị chi tiết đơn hàng
        return view('admin.pages.order.details', [
            'order' => $order,
            'orderDetail' => $orderDetail,
            'users' => $users,
            'statusOptions' => $statusOptions,
            'totalPrice' => $totalPrice
        ]);
    }

    public function UpdateStatus(Request $request, Order $order)
    {
//        viết login cập nhật trạng thái đơn hàng(đang giao, đã giao, đã hủy,...)
        $order->status = $request->status;
        $order->save();
//        return view('admin.pages.order.details',['order',$order]);
        return redirect()->route('admin.order.index', ['orderId' => $order->id])
            ->with('success', 'Cập nhật thành công trạng thái!');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
