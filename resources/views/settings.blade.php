@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-plus-circle icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Datos globales
                    <div class="page-title-subheading">Definir datos globales del sistema.
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
                        <form action="{{ route('admin.settings.store') }}" method="POST">
                            @csrf
                            <div class="position-relative form-group container">
                                <div class="row">
                                    <label for="service_level">Nivel de servicio</label>
                                    <div class="col-md-3 input-group">
                                        
                                        <input type="number" name="service_level" @if($setting) value="{{ $setting->service_level }}" @endif id="service_level" max="100" class="form-control" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="text-right mt-3">
                                <button class="btn btn-primary btn-lg"><strong> Guardar  <i class="fa fa-download"></i></strong></button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection