<?php

namespace App\Http\Controllers;

use App\Product;
use App\Provider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.list', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create', ['providers' => Provider::all()]);
    }


    public function createProv($provider_id)
    {
        return view('provider.createProd', ['provider' => Provider::find($provider_id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'code' => $request->code,
            'name' => $request->name,
            'description' =>$request->description,
            'price' => $request->price,
            'cost' => $request->cost,
            'stock' => $request->stock,
            'provider_id' => $request->provider_id
        ]);
        return $this->index();
    }


    public function storeProv(Request $request, $provider_id)
    {
        Product::create([
            'code' => $request->code,
            'name' => $request->name,
            'description' =>$request->description,
            'price' => $request->price,
            'cost' => $request->cost,
            'stock' => $request->stock,
            'provider_id' => $provider_id
        ]);

        return view('provider.show', 
        ['provider' => Provider::find($provider_id), 
        'products' => Product::where('provider_id', $provider_id)->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->cost = $request->cost;
        $product->stock = $request->stock;

        $product->save();

        return $this->index();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->index();
    }

    public function choose(Request $request)
    {
        if($request->check) {
            // Buscar zona recomendada para el producto
            $recomendation = "A";
        }else {
            $recomendation = false;
        }

        // Calcular porcentaje que representa en el inventario el producto

        return view('product.choose', ['products' => Product::all(), 'recomendation' => $recomendation]);
    }
}
