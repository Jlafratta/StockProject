@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Proveedor
                    <div class="page-title-subheading">Informacion y productos del proveedor seleccionado.
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="main-card card">
                    <div class="card-body">
                        <h5 class="card-title">Informacion</h5><hr class="mb-4">
                        <div class="position-relative form-group container">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" value="{{ $provider->name }}" id="name" class="form-control" readonly>
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="shipping_cost">Costos de envio <span class="text-danger"><strong> $ </strong></span></label>
                                    <input type="number" name="shipping_cost" value="{{ $provider->shipping_cost }}" max="999999" id="shipping_cost" class="form-control" readonly>
                                </div>
                                <div class="col-md-2 form-group">
                                    <label for="reposition_period">Reposicion (dias)</label>
                                    <input type="number" name="reposition_period" value="{{ $provider->reposition_period }}" max="999999" id="reposition_period" class="form-control" readonly>
                                </div>
                                <div class="col-md-2 form-group">
                                    <label style="opacity: 0%">.</label>
                                    <a href="{{ route('admin.provider.edit', $provider) }}"><button class="btn btn-primary btn-block btn-lg"><strong> Editar <i class="fa fa-edit"></i></strong></button></a>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="container">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Productos <a href="{{ route('admin.product.createProv', $provider->id) }}"><button class="btn btn-success float-right mb-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar" type="number" name="check" value="1"><i class="fa fa-plus"></i></button></a></h5>

                        <table class="mb-0 table table-responsive-lg table-hover">
                            <thead>
                            <tr>
                                <th>Código</th>
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
                                <th scope="row">{{ $product->code }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->cost }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->description }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.provider.showProd', $product) }}">
                                        <button class="btn btn-primary btn-lg btn-icon mr-2"><i class="fa fa-share"></i></button>
                                    </a>
                                <button class="btn btn-danger btn-lg btn-icon" type="button" data-toggle="modal" data-target="#deleteModal{{$product->id}}"><i class="fa fa-trash"></i></button>
                                </td>

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