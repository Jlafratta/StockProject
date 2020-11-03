@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-list-ul icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Listado de productos
                    <div class="page-title-subheading">Productos actualmente registrados en el inventario.
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Productos</h5>

                        <table class="mb-0 table table-responsive-lg table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Costo</th>
                                <th>Stock</th>
                                <th>Descripcion</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->cost }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->description }}</td>
                                <td class="d-flex justify-content-center"><button class="btn btn-primary btn-lg btn-icon mr-2"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-lg btn-icon"><i class="fa fa-trash"></i></button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                        

                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection