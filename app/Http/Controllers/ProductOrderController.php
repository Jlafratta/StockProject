<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\ProductOrder;

use Carbon\Carbon;

class ProductOrderController extends Controller
{
    public function index()
    {
        return view('order.list', ['orders' => ProductOrder::all()]);
    }

    public function create($product_id)
    {
        return view('order.create', ['product' => Product::find($product_id)]);
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        ProductOrder::create([
            'date' => Carbon::now(),
            'shipping_cost' => $request->shipping_cost,
            'quantity' => $request->quantity,
            'state' => false,
            'product_id' => $product->id,
            'provider_id' => $product->provider->id,
        ]);

        return view('product.list', ['products' => Product::all(), 'success' => $product->provider->reposition_period]);
    }
}
