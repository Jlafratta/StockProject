@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Nuevo producto
                    <div class="page-title-subheading">Añadir un nuevo producto al sistema.
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-5">
            <div class="container">
                <div class="main-card card">
                    <div class="card-body">
                        <h5 class="card-title">Informacion</h5><hr class="mb-4">
                        <form action="{{ route('admin.product.storeProv', $provider->id) }}" method="POST">
                            @csrf
                            <div class="position-relative form-group container">
                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="code">Codigo</label>
                                        <input type="number" name="code" max="999999" id="code" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="code">Demanda diaria</label>
                                        <input type="number" name="daily_demand" max="999999" id="code" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="desc">Descripcion</label>
                                        <textarea rows="4" type="text" name="description" id="desc" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="text-right mt-3">
                                <button class="btn btn-primary btn-lg"><strong> Agregar  <i class="fa fa-download"></i></strong></button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="container">
                <div class="main-card card">
                    <div class="card-body">
                        <h5 class="card-title">Contable</h5><hr class="mb-4">
                            <div class="position-relative form-group container">
                                <div class="row">
                                    
                                    <div class="form-group">
                                        <label for="price">Precio <span class="text-success"><strong> $ </strong></span></label>
                                        <input type="number" name="price" id="price" value="0.0" class="form-control" required>
                                    </div> 
                                </div>
                                
                                <div class="row">
                                    
                                    <div class="form-group">
                                        <label for="cost">Costo <span class="text-danger"><strong> $ </strong></span></label>
                                        <input type="number" name="cost" id="cost" value="0.0" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="row d-flex justify-content-between">
                                    
                                    <div class="form-group">
                                        <label for="stock">Stock</label>
                                        <input type="text" name="stock" id="stock" value="0" class="form-control" required>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection
