@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Subir imagenes</h1>
            <form action="{{url('imagen')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
        </div>
    </div>
</div>

@foreach ($publicidad as $publicidades)

<table>
    <td><img src="{{asset('storage/imagen/publicidad/'.$publicidades->image)}}" height="100px"></td>
</table>
    
@endforeach
    
@endsection