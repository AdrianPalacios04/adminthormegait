@extends('layouts.panel')
@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Acertijos Thor Ticket</h3>
            </div>
            <div class="col text-right">
                <a href="{{url('ticket/create')}}" class="btn btn-sm btn-primary">Nuevos Acertijos</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(session('notification'))
        <div class="alert alert-success" role="alert">
            {{session('notification')}}
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                <th></th>
                <th scope="col">Nombre</th>
                <th scope="col">Pregunta N°1</th>
                {{-- <th scope="col">Respuesta N°1</th> --}}
                <th scope="col">Pregunta N°2</th>
                {{-- <th scope="col">Respuesta N°2</th> --}}
                <th scope="col">Pregunta N°3</th>
                {{-- <th scope="col">Respuesta N°3</th> --}}
                <th scope="col">Llave N°1</th>
                <th scope="col">Llave N°2</th>
                <th scope="col">Llave N°3</th>
                <th scope="col">Pistas</th>
                @if (auth()->user()->role == 'admin' or auth()->user()->role == 'supacertijero')
                <th scope="col">Creador</th>
                <th scope="col">Uso</th>
                @endif
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($thorticket as $thortickets)
                    
                <tr>
                    <td>
                        <button type="button" class="btn btn-sm" data-toggle="modal" 
                            data-target="#exampleModal{{$thortickets->i_id}}" >
                            <i class="fa fa-search-plus" aria-hidden="true"></i></button>
                    </td>
                    <td>
                        {{$thortickets->t_nombre}}
                    </td>
                    <td  style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:100px;">
                        {{$thortickets->t_pregunta1}}
                    </td>
                    {{-- <td>
                        {{$thortickets->t_respuesta1}}
                    </td> --}}
                    <td>
                        {{$thortickets->t_pregunta2}}
                    </td>
                    {{-- <td>
                        {{$thortickets->t_respuesta2}}
                    </td> --}}
                    <td>
                        {{$thortickets->t_pregunta3}}
                    </td>
                    {{-- <td>
                        {{$thortickets->t_respuesta3}}
                    </td> --}}
                    <td>
                        {{$thortickets->t_llave1}}
                    </td>
                    <td>
                        {{$thortickets->t_llave2}}
                    </td>
                    <td>
                        {{$thortickets->t_llave3}}
                    </td>
                    <td>
                        {{$thortickets->pistas_Ax}}
                    </td>
                    <td>
                        {{$thortickets->user->name}}
                    </td>
                    
                    <td>
                        <label class="custom-toggle">
                        <input type="checkbox" class="toggle-class" data-id="{{ $thortickets->i_id }}" 
                        data-toggle="toggle" data-style="slow" {{ $thortickets->i_uso == true ? 'checked' : ''}}>
                        <span class="custom-toggle-slider rounded-circle"></span>
                        </label>
                    </td>
                    <td>
                        {{-- @if (auth()->user()->role == 'admin' or auth()->user()->role == 'acertijero') --}}
                        <form action="{{url('/ticket/'.$thortickets->i_id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{url('/ticket/'.$thortickets->i_id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                        {{-- @endif --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Modal -->
        
        @include('thorticket.modal')
        {{ $thorticket->links() }}
    </div>
</div>
@endsection
@push('scripts')
<script>
    $('.toggle-class').change(function() {
        var i_uso = $(this).prop('checked') == true ? 1:0  ;
    
        var i_id = $(this).data('id');
     
        $.ajax({
            type:'GET',
            dataType:'JSON',
            url: '{{route('changeUse')}}',
            data:{
                'i_uso':i_uso,
                'i_id':i_id,
            },
            success:function(data){
              
            }
        });
    });
</script>
    
@endpush

    
