<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartList;

class CartListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartList = CartList::get();
        return view('cart.index', compact('cartList'));
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
        $checkCart = CartList::where('product_id', '=', $request->id_product)->get();
        if (empty($checkCart)) {
            $cart = new CartList();
            $cart->product_id = $request->id_product;
            $cart->quantity = 1;

            $cart->save();
        }

        // $oldCart = CartList::find($checkCart->id);
        // dd($oldCart);
        // $checkCart['quantity'] = $checkCart['quantity'] + 1;
        // $checkCart->save();

        return redirect()->route('cart.index')->with('success', 'Add cart successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CartList $cartList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartList $cartList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartListRequest $request, CartList $cartList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartList $cartList)
    {
        //
    }
}
