<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Provider;
use App\Product;

class ProviderController extends Controller
{
    
    public function index() {
        return view('provider.list', ['providers' => Provider::all()]);
    }

    public function create() {
        return view('provider.create');
    }

    public function store(Request $request) {
        Provider::create([
            'name' => $request->name,
            'reposition_period' => $request->reposition_period,
            'shipping_cost' => $request->shipping_cost
        ]);
        return $this->index();
    }

    public function show(Provider $provider) {
        
        return view('provider.show', 
        ['provider' => $provider, 
        'products' => Product::where('provider_id', $provider->id)->get()]);
    }

    public function showProd(Product $product)
    {
        return view('provider.showProd', ['product' => $product]);
    }

    public function destroy(Provider $provider) {
        $provider->delete();
        return $this->index();
    }

    public function edit(Provider $provider) {
        return view('provider.edit', ['provider' => $provider]);
    }

    public function editProd(Product $product)
    {
        return view('provider.editProd', ['product' => $product]);
    }


    public function update(Request $request, Provider $provider) {

        $provider->name = $request->name;
        $provider->reposition_period = $request->reposition_period;
        $provider->shipping_cost = $request->shipping_cost;

        $provider->save();

        return $this->show($provider);
    }

    public function updateProd(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->cost = $request->cost;
        $product->stock = $request->stock;

        $product->save();
        $provider = $product->provider()->get()->first();
        return view('provider.show', 
        ['provider' => $provider, 
        'products' => Product::where('provider_id', $provider->id)->get()]);
    }

}
