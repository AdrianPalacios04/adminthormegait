@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">EQUILICUA</h3>
        </div>
        <div class="col text-right">
            <a href="{{url('acertijo/create')}}" class="btn btn-sm btn-primary">Nuevos Acertijos</a>
            
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
                
                <th scope="col">Pregunta</th>
                <th scope="col">Respuesta</th>
                @if (auth()->user()->role == 'admin' or 'supacertijero')
                <th scope="col">Usuario</th>
                <th scope="col">Uso</th>
                 @endif 
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($acertijo as $acertijos)
                    
                <tr>
                    <td  style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:100px;">
                        {{$acertijos->pregunta}}
                    </td>
                    <td>
                        {{$acertijos->respuesta}}
                    </td>
                    @if (auth()->user()->role == 'admin' or 'supacertijero')
                    <td>
                    {{$acertijos->user->name}}
                    </td>
                    <td>
                        <label class="custom-toggle">
                        <input type="checkbox" class="toggle-class" data-id="{{ $acertijos->id }}" 
                        data-toggle="toggle" data-style="slow" data-label-off="No" data-label-on="Yes" {{ $acertijos->i_uso == true ? 'checked' : ''}}>
                        <span class="custom-toggle-slider rounded-circle"></span>
                        </label>
                    </td>
                    @endif
                    <td>
                        <form action="{{url('/acertijo/'.$acertijos->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-default" data-toggle="modal" 
                            data-target="#exampleModal{{$acertijos->id}}" >
                            <i class="fa fa-eye text-black" aria-hidden="true"></i></button>
                        <a href="{{url('/acertijo/'.$acertijos->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>
                        <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <!-- Modal -->
        
        @include('acertijo.show')
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

    
