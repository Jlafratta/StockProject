<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sale.list', ['sales' => Sale::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sale.create', ['products' => Product::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        if($product->stock < $request->quantity){
            return redirect()->back()->with('errorMsg', 'La cantidad excede al stock disponible');
        }

        $sale = new Sale();
        $sale->date = $request->date;
        $sale->price = $product->price;
        $sale->cost = $product->cost;
        $sale->quantity = $request->quantity;
        $sale->total_cost = $sale->quantity * $sale->cost;
        $sale->total_price = $sale->quantity * $sale->price;
        $sale->product_id = $product->id;

        return view('sale.preConfirm', ['sale' => $sale, 'product' => $product]);
    }

    public function confirm(Request $request) {
        $product = Product::find($request->product_id);

        $sale = new Sale();
        $sale->date = $request->date;
        $sale->price = $product->price;
        $sale->cost = $product->cost;
        $sale->quantity = $request->quantity;
        $sale->total_cost = $sale->quantity * $sale->cost;
        $sale->total_price = $sale->quantity * $sale->price;
        $sale->product_id = $product->id;

        $sale->save();

        $product->stock -= $sale->quantity;     // Resta el stock al producto previamente validado
        $product->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
