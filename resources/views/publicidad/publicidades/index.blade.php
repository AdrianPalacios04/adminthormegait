@extends('layouts.panel')
@section('content')
<h1 style="color: white">hola</h1>
{{-- <div class="table-responsive">
      <table class="table">
          <tr>
            <th>Publicidad</th>
            <th>Con 1</th>
            <th>Con 2</th>
            <th>Con 3</th>
          </tr>
         <tbody>
          @foreach ($marca as $marcas)
            <tr>
               <td>{{$marcas->marca->marcas}} 
              </td>
              <td style="width: 100px">
              
                  <a href="{{asset('imagen/publicidad/'.$marcas->imagen)}}" data-toggle="lightbox">
                  <img src="{{asset('imagen/publicidad/'.$marcas->imagen)}}" height="150" width="30" class="img-fluid rounded"/></a>
                
                  <h5>Link: {{$marcas->link}}</h5>  
                  <h5>Fechas: {{ \Carbon\Carbon::parse($marcas->f_inicio)->format('d M, Y')}} - {{ \Carbon\Carbon::parse($marcas->f_final)->format('d M, Y')}}</h5>
                    
                  </td>
            
          
            </tr>
          @endforeach
        </tbody>
      </table>
    </div> --}}
{{-- 
    <script>
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      });
      </script> --}}
    
@endsection