@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row justify-content-end">
            <div class="col">
                <h3 class="mb-0">Reclamo y/o quejas</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(session('notificacion'))
        <div class="alert alert-success" role="alert">
            {{session('notificacion')}}
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                <th scope="col">Usuario</th>
                <th scope="col">tienda compra</th>
                <th scope="col">tipo</th>
                <th scope="col">monto</th>
                <th scope="col">categoria</th>
                <th scope="col">pedido</th>
                <th scope="col">detalle</th>
                <th scope="col">Fecha</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reclamo as $reclamos)
                    
                <tr>
                    <td>
                        <button type="button" class="btn btn-sm" data-toggle="modal" 
                            data-target="#exampleModal{{$reclamos->id_reclamaciones}}" >
                            <i class="fa fa-search-plus" aria-hidden="true"></i></button>
                    </td>
                    <td scope="row">
                        {{$reclamos->clients->t_username}}
                    </td>
                    <td>
                        {{$reclamos->tienda_compra}}
                    </td>
                    <td>
                        {{$reclamos->tipo->tipo}}
                    </td>
                    <td>
                        {{$reclamos->monto_reclamado}}
                    </td>
                    <td>
                        {{$reclamos->categoria->categoria}}
                    </td>
                    <td  style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:100px;">
                        {{$reclamos->pedido}}
                    </td>
                    <td  style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:100px;">
                        {{$reclamos->detalle}}
                    </td>
                    <td>
                        {{ \Carbon\Carbon::parse($reclamos->fecha_registro)->format('d M, Y')}}
                    </td>                    
                    <td>
                       @if ($reclamos->estado == false)
                        <form action="{{url('/reclamo/'.$reclamos->id_reclamaciones)}}" method="post" >
                            @csrf
                            <button type="button" class="btn btn btn-sm btn-default" data-toggle="modal" 
                            data-target="#exampleModal1{{$reclamos->id_reclamaciones}}" >
                            Responder</button>
                        </form>  
                       @endif
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @include('reclamo.modal')

        @include('reclamo.envio')
        {{-- <div class="d-flex justify-content-center">
            {{ $reclamo->links() }}
        </div>   --}}
    </div>
</div>
    
@endsection