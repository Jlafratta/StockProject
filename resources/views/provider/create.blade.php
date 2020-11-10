@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Nuevo proveedor
                    <div class="page-title-subheading">Añadir un nuevo proveedor al sistema.
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
                        <form action="{{ route('admin.provider.store') }}" method="POST">
                            @csrf
                            <div class="position-relative form-group container">
                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="shipping_cost">Costos de envio <span class="text-danger"><strong> $ </strong></span></label>
                                        <input type="number" name="shipping_cost" max="999999" id="shipping_cost" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 input-group">
                                        <label for="reposition_period">Periodo de reposicion</label>
                                        <input type="number" name="reposition_period" max="999999" id="reposition_period" class="form-control" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">días.</span>
                                        </div>
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
    </div>
@endsection