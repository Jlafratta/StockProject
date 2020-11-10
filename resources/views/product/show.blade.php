@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Informacion de producto
                    <div class="page-title-subheading">Especificaciones del producto seleccionado.
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
                        @csrf
                        <div class="position-relative form-group container mb-4">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control" readonly>
                                </div>
                                <div class="col form-group">
                                    <label for="price">Precio <span class="text-success"><strong> $ </strong></span></label>
                                    <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control" readonly>
                                </div>
                                <div class="col form-group">
                                    <label for="cost">Costo <span class="text-danger"><strong> $ </strong></span></label>
                                    <input type="number" name="cost" id="cost" value="{{ $product->cost }}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="desc">Descripcion</label>
                                    <textarea type="text" name="description" id="desc" class="form-control" readonly>{{ $product->description }}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Stock</label> 
                                    <div class="input-group">
                                        <input type="text" name="stock" id="stock" value="{{ $product->stock }}" class="form-control" readonly>
                                        <div class="input-group-append">
                                        <a href="{{ route('admin.order.create', $product->id) }}"><button class="btn btn-success"><strong> <i class="fa fa-plus"></i> </strong></button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container d-flex justify-content-between mb-2">
                            <p><strong> Proveedor:</strong> @if($provider){{ $provider->name }} @else no encontrado @endif</p>
                            <a href="{{ route('admin.product.edit', $product) }}">
                                <button class="btn btn-primary btn-lg">
                                    <strong> Editar <i class="fa fa-edit"></i></strong>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection