@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-list-ul icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Listado de ventas
                    <div class="page-title-subheading">Ventas actualmente registradas en el sistema.
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
                        <h5 class="card-title">Ventas </h5>

                        <table class="mb-0 table table-responsive-lg table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Fecha</th>
                                <th>Unidades</th>
                                <th>Precio unitario</th>
                                <th>Total</th>
                                {{-- <th></th> --}}
                            </thead>
                            <tbody>
                                @foreach ($sales as $sale)
                            <tr>
                                <th scope="row">{{ $sale->id }}</th>
                                <td>{{ $sale->product->name }}</td>
                                <td>{{ date("d / m / Y", strtotime($sale->date)) }}</td>
                                <td>{{ $sale->quantity }}</td>
                                <td>{{ $sale->price }} </td>
                                <td> {{ $sale->total_price }} </td>
                                {{-- <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.provider.show', $sale) }}">
                                        <button class="btn btn-primary btn-lg btn-icon mr-2"><i class="fa fa-share"></i></button>
                                    </a>
                                
                                </td> --}}

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