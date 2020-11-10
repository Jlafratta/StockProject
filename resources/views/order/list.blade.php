@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-list-ul icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Listado de pedidos
                    <div class="page-title-subheading">Ordenes de compra registradas en el sistema.
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @if(isset($success))
    <div class="col-md-8">
        <div class="alert alert-success fade show" role="alert"> Su orden de compra fue solicitada y llegara en {{ $success }} días. </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Pedidos</h5>

                        <table class="mb-0 table table-responsive-lg table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Unidades</th>
                                <th>Proveedor</th>
                                <th>Envio</th>
                                <th class="justify-content-center">Estado</th>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{ $order->product->name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->provider->name }}</td>
                                <td>{{ $order->shipping_cost }}</td>
                                <td class="justify-content-center">
                                    @if(!App\ProductOrder::getState($order))
                                        <div class="mr-2 badge badge-pill badge-secondary">Pendiente</div>
                                    @endif
                                    @if(App\ProductOrder::getState($order) == 1 )
                                        <div class=" mr-2 badge badge-pill badge-primary">Disponible</div>
                                    @endif
                                    @if(App\ProductOrder::getState($order) == 2)
                                        <div class="mr-2 badge badge-pill badge-success">Recibido</div>
                                    @endif
                                </td>
                                {{-- <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.product.show', $product) }}">
                                        <button class="btn btn-primary btn-lg btn-icon mr-2"><i class="fa fa-share"></i></button>
                                    </a>
                                <button class="btn btn-danger btn-lg btn-icon" type="button" data-toggle="modal" data-target="#deleteModal{{$product->id}}"><i class="fa fa-trash"></i></button>
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