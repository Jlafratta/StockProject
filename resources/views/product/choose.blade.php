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
                        <form action="{{ route('admin.product.choose') }}" method="GET">
                            @csrf

                        <h5 class="card-title">Informacion<button class="btn float-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver recomendacion" type="number" name="check" value="1"><i class="fa fa-question"></i></button></h5>  <hr class="mb-4">
                            <div class="position-relative form-group container">
                                <div class="row">
                                    <div class="col-md-7 form-group">
                                        <label for="product">Producto</label>
                                            <select name="products[]" id="product" class="form-control" name="product">
                                                @foreach ($products as $product)
                                                    <option value="{{$product->id}}">{{ $product->name ." (". $product->stock .")"}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="zone">Zona</label>
                                        <select name="zone" id="zone" class="form-control" name="zone">
                                            <option value="0"></option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            @if ($recomendation)
                            <div class="float-left"> Zona recomendada: <strong>{{ $recomendation }}</strong> </div>
                            @endif
                            <div class="text-right mt-3">
                                <button class="btn btn-primary btn-lg"><strong> Siquiente  <i class="fa fa-angle-double-right"></i></strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection