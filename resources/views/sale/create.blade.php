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
                        <h5 class="card-title">Nuevo</h5><hr class="mb-4">
                        <form action="{{ route('admin.sale.store') }}" method="POST">
                            @csrf
                            <div class="position-relative form-group container mb-3">
                                <div class="row">
                                    <div class="col-md-7 form-group">
                                        <label for="name">Producto</label>
                                            <select name="product_id" id="product" class="form-control" name="product">
                                                @foreach ($products as $product)
                                                    <option value="{{$product->id}}">{{ $product->name ." (". $product->stock .")"}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="quantity">Cantidad <span><strong> u. </strong></span></label>
                                        <input type="number" name="quantity" id="quantity" min="1" value="1" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-5 form-group">
                                        <label for="date">Fecha</label>
                                        <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" class="form-control" required>
                                    </div>
                                </div>
                                @if(\Session::has('errorMsg'))
                                    <p class="alert alert-danger">
                                        {!! \Session::get('errorMsg') !!}
                                    </p>
                                @endif
                            </div>
                            
                            <div class="container text-right mb-2">
                                <button class="btn btn-primary btn-lg col-md-4"><strong> Agregar  <i class="fa fa-download"></i></strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection