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
        $orders=DB::table('orders_list')
            ->simplePaginate(10);
        return view('admin.pages.order.index',[
            'orders'=>$orders,
            'statusOptions'=>$statusOptions
        ]);
    }

    public function orderConfirmation(){
//        login xác nhận đơn hàng

    }

    public function show($id)
    {
        $statusOptions = [
            'pending' => 'pending',
            'processing' => 'processing',
            'completed' => 'completed',
            'decline' => 'decline',
        ];
        $users=DB::table('project_sem2.users_orders')->where('id',$id)->get();
        $orderDetail=DB::table('project_sem2.chi_tiet_don_hang')->where('id',$id)->get();
//        viết login hiển thị chi tiết đơn hàng
        return view('admin.pages.order.details',['orderDetail'=>$orderDetail,
            'users'=>$users,
            'statusOptions'=>$statusOptions
            ]);
    }

    public function UpdateStatus(Request $request,Order $order)
    {
//        viết login cập nhật trạng thái đơn hàng(đang giao, đã giao, đã hủy,...)
        $order->status=$request->status;
        $order->save();
//        return view('admin.pages.order.details',['order',$order]);
        return redirect()->route('admin.order.index', ['orderId' => $order->id])->with('success','Cập nhật thành công trạng thái!');
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
