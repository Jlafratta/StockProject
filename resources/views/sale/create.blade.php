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
                            <div class="position-relative form-group container mb-4">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Productos</label>
                                            <select name="products[]" id="product" class="form-control" name="product">
                                                @foreach ($products as $product)
                                                    <option value="{{$product->id}}">{{ $product->name }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="col form-group">
                                        <label for="price">Precio <span class="text-success"><strong> $ </strong></span></label>
                                        <input type="number" name="price" id="price" value="0.0" class="form-control" required>
                                    </div>
                                    <div class="col form-group">
                                        <label for="cost">Costo <span class="text-danger"><strong> $ </strong></span></label>
                                        <input type="number" name="cost" id="cost" value="0.0" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label for="desc">Descripcion</label>
                                        <input type="text" name="description" id="desc" class="form-control">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="stock">Stock</label>
                                        <input type="text" name="stock" id="stock" value="0" class="form-control" required>
                                    </div>
                                </div>
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