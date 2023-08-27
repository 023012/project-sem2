<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\DiscountRequest;
use App\Models\Discount;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;


class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $discounts = Discount::all();
        return view('admin.pages.discount.index', [
            'discounts' => $discounts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.discount.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiscountRequest $request)
    {
        $discount = new Discount();
        $discount->name = $request->name;
        $discount->discount_percent = $request->discount_percent;
        $discount->active = $request->active;
        $discount->save();
        return redirect()->route('admin.discount.index')
            ->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount)
    {
        return view('admin.pages.discount.edit', [
            'discount' => $discount,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\DiscountRequest;
     * @param  \App\Models\Discount $discount
     * @return \Illuminate\Http\Response
     */
    public function update(DiscountRequest $request, Discount $discount)
    {
        $discount->name = $request->name;
        $discount->discount_percent = $request->discount_percent;
        $discount->active = $request->active;
        $discount->save();
        return redirect()->route('admin.discount.index')
            ->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();
        return redirect()->route('admin.discount.index')
            ->with('success', 'Xóa thành công');
    }
}
