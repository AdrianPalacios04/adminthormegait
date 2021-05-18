@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Acertijos Thor Paga</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('cash/create')}}" class="btn btn-sm btn-primary">Nuevos Acertijos</a>
            
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

                {{-- @if (auth()->user()->role == 'admin' or 'supacertijero') --}}
                <th scope="col">Usuario</th>
                <th scope="col">Uso</th>
                 {{-- @endif  --}}
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($thorpaga as $thorpagas)
                    
                <tr>
                    <td>
                        {{$thorpagas->t_nombre}}
                    </td>
                    <td  style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:100px;">
                        {{$thorpagas->t_pregunta1}}
                    </td>
                    {{-- <td>
                        {{$thorpagas->t_respuesta1}}
                    </td> --}}
                    <td>
                        {{$thorpagas->t_pregunta2}}
                    </td>
                    {{-- <td>
                        {{$thorpagas->t_respuesta2}}
                    </td> --}}
                    <td>
                        {{$thorpagas->t_pregunta3}}
                    </td>
                    {{-- <td>
                        {{$thorpagas->t_respuesta3}}
                    </td> --}}
                    <td>
                        {{$thorpagas->t_llave1}}
                    </td>
                    <td>
                        {{$thorpagas->t_llave2}}
                    </td>
                    
                    <td>
                        {{$thorpagas->t_llave3}}
                    </td>
                    <td>
                     {{-- nombre del usuario  --}}
                    </td>
                    {{-- <td>
                        <label class="custom-toggle">
                        <input type="checkbox" class="toggle-class" data-id="{{ $thorpagas->i_id }}" 
                        data-toggle="toggle" data-style="slow" data-label-off="No" data-label-on="Yes" {{ $thorpagas->i_uso == true ? 'checked' : ''}}>
                        <span class="custom-toggle-slider rounded-circle"></span>
                        </label>
                    </td> --}}
                    <td>
                        <form action="{{url('/cash/'.$thorpagas->i_id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-default" data-toggle="modal" 
                            data-target="#exampleModal{{$thorpagas->i_id}}" >
                            <i class="fa fa-eye text-black" aria-hidden="true"></i></button>
                        <a href="{{url('/cash/'.$thorpagas->i_id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Modal -->
        
         @include('thorpaga.modal')
        {{-- {{ $acertijo->links() }} --}}
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

    
