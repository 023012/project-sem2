<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('site.pages.cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'stock_quantity' => $request->stock_quantity,
                'thumbnail' => $request->thumbnail,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        $cartItem = \Cart::get($id);

        if (!$cartItem) {
            return redirect()->route('cart.index')->with('error', 'Sản phẩm không tồn tại trong giỏ hàng.');
        }

        // Kiểm tra xem số lượng trong giỏ hàng có lớn hơn số lượng sản phẩm không
        if ($quantity > $cartItem->attributes->stock_quantity) {
            return redirect()->route('cart.list')->with('error', 'Số lượng trong giỏ hàng lớn hơn số lượng sản phẩm.');
        }

        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }
}
