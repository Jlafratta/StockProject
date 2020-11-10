@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Nueva orden de compra
                    <div class="page-title-subheading">Añadir un nuevo pedido de producto al sistema.
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div class="main-card card">
                    <div class="card-body">
                        <h5 class="card-title">Informacion</h5><hr class="mb-4">
                        <form action="{{ route('admin.order.store') }}" method="POST">
                            @csrf
                            <div class="position-relative form-group container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong>Producto</strong>
                                        <h5 class="mt-2">{{ $product->name }} </h5>
                                    <input type="number" name="product_id" value="{{ $product->id }}" hidden>
                                    </div>
                                    <div class="col-md-5 form-group">
                                        <label for="reposition_period">Unidades</label>
                                        <input type="number" name="quantity" max="999999" id="reposition_period" class="form-control" required>
                                        <p class="mt-2"><strong> Recomendado: </strong> 12</p>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <label for="shipping_cost">Costos de envio <span class="text-danger"><strong> $ </strong></span></label>
                                        <input type="number" value="{{ $product->provider->shipping_cost }}" name="shipping_cost" max="999999" id="shipping_cost" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-6 mt-3 text-right">
                                        <button class="btn btn-primary btn-lg"><strong> Agregar  <i class="fa fa-download"></i></strong></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection