@extends('layouts.app')

@section('app-content')

    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-list-ul icon-gradient bg-sunny-morning">
                    </i>
                </div>
                <div>Listado de proveedores
                    <div class="page-title-subheading">Proveedores actualmente registrados en el sistema.
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
                        <h5 class="card-title">Proveedores <a href="{{ route('admin.provider.create') }}"><button class="btn btn-success float-right mb-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Agregar" type="number" name="check" value="1"><i class="fa fa-plus"></i></button></a></h5>

                        <table class="mb-0 table table-responsive-lg table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Reposicion (días)</th>
                                <th>Costo de envio</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($providers as $provider)
                            <tr>
                                <th scope="row">{{ $provider->id }}</th>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->reposition_period }}</td>
                                <td>{{ $provider->shipping_cost }}</td>
                                
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.provider.show', $provider) }}">
                                        <button class="btn btn-primary btn-lg btn-icon mr-2"><i class="fa fa-share"></i></button>
                                    </a>
                                <button class="btn btn-danger btn-lg btn-icon" type="button" data-toggle="modal" data-target="#deleteModal{{$provider->id}}"><i class="fa fa-trash"></i></button>
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

@section('modal')
    @foreach ($providers as $prod)
        
    
    <!-- Modal -->
    <div class="modal fade" id="deleteModal{{$prod->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <p class="mb-0">Esta seguro que desea eliminar el proveedor {{ $prod->name }} ?</p>
                <p>Se eliminarán todos sus productos</p>
                <p>No podra revertir los cambios</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <form action="{{ route('admin.provider.destroy', $prod) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection