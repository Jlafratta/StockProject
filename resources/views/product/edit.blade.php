@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Modificar producto
                    <div class="page-title-subheading">Editar los valores del producto seleccionado.
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
                        <form action="{{ route('admin.product.update', $product) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="position-relative form-group container mb-4">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Nombre</label>
                                    <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control" required>
                                    </div>
                                    <div class="col form-group">
                                        <label for="price">Precio <span class="text-success"><strong> $ </strong></span></label>
                                        <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control" required>
                                    </div>
                                    <div class="col form-group">
                                        <label for="cost">Costo <span class="text-danger"><strong> $ </strong></span></label>
                                        <input type="number" name="cost" id="cost" value="{{ $product->cost }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="desc">Descripcion</label>
                                        <textarea type="text" name="description" id="desc" class="form-control" required>{{ $product->description }}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Stock</label> 
                                    <div class="input-group">
                                        <input type="text" name="stock" id="stock" value="{{ $product->stock }}" class="form-control" readonly>
                                        <div class="input-group-append">
                                            <a href=""><button class="btn btn-success"><strong> <i class="fa fa-plus"></i> </strong></button></a>
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
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection