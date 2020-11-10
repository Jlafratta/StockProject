@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Nueva venta
                    <div class="page-title-subheading">Generar una nueva venta en el sistema.
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-md-5">
            <div class="container">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Venta</h5><hr class="mb-4">
                        <form action="{{ route('admin.sale.confirm', $sale) }}" method="POST">
                            @csrf
                            <div class="container mb-3 d-flex justify-content-between">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label><strong> Producto </strong></label>
                                            <p>{{ $product->name }}</p>
                                        <input type="number" name="product_id" value="{{ $product->id }}" hidden>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-6 form-group">
                                            <label><strong> Fecha </strong></label>
                                            <p>{{ $sale->date }}</p>
                                        <input type="date" name="date" value="{{ $sale->date }}" hidden>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-between">
                                            <strong> Precio </strong>
                                            <p>{{ $sale->price }}</p>
                                        <input type="number" name="price" value="{{ $sale->price }}" hidden>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-between">
                                            <strong> Unidades </strong>
                                            <p> {{ $sale->quantity }} </p>
                                        <input type="number" name="quantity" value="{{ $sale->quantity }}" hidden>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-between">
                                            <strong> Total </strong>
                                            <p>{{ $sale->total_price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="container text-right mb-2">
                                <button class="btn btn-primary btn-lg col-md-4"><strong> Confirmar  <i class="fa fa-check"></i></strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection