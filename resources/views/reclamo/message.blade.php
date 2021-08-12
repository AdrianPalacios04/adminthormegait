<html>
<style>
    * {
        font-size: 13px;
        height: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    #hoja {
        width: 300px;
        text-align: center;
    }
    #respuesta {
        height: 100px;
        margin-top: 100px;
    }
    #firma {
        text-align: center;
    }
    #pedido {
        width: 300px;
    }
    #datos {
        background-color: #c7cbd1;
    }
</style>
<table border="1" style="width: 800px">
    <tr>
        <td colspan="5" style="text-align: center;">LIBRO DE RECLAMACIONES</td>
        <td id="hoja" rowspan="2">HOJA DE RECLAMACIÓN
            <br>
            <?php 
                $length = 5;
                $stringer = $reclamo['correlativo'];
                echo str_pad($stringer,$length,"0", STR_PAD_LEFT);
            ?>
            
        </td>
    </tr>
    <tr>
        <th id="fecha">FECHA</th>
        <th>{{ \Carbon\Carbon::parse($reclamo['fecha_registro'])->format('d')}}</th>
        <th colspan="2">{{ \Carbon\Carbon::parse($reclamo['fecha_registro'])->format('M')}}</th>
        <th>{{ \Carbon\Carbon::parse($reclamo['fecha_registro'])->format('Y')}}</th>
    </tr>
    <tr>
        <td colspan="6" style="text-align: center;">Ruc: 20603928394 Razón Social: OPERACIONES THOR S.A.C.</td>
    </tr>
    <tr>
        <td id="datos" colspan="6">
            1.IDENTIFICACION DEL CONSUMIDOR RECLAMANTE
        </td>
    </tr>

    <tr>
        {{-- <td colspan="6">NOMBRE: {{$reclamo['nombre']}} {{$reclamo['apellido']}}</td> --}}
    </tr>
    <tr>
        <td colspan="6">DOMICILIO:</td>
    </tr>
    <tr>
        {{-- <td colspan="2">DNI/CE: {{$reclamo['dni']}}</td> --}}
        {{-- <td colspan="4">TELEFONO/EMAIL: {{$reclamo['n_celular']}}</td> --}}
    </tr>
    <tr>
        <td id="datos" colspan="6">
            2.IDENTIFICACION DEL BIEN CONTRATADO
        </td>
    </tr>
    <tr>
        <td>PRODUCTO</td>
        <td style="text-align: center"> 
            @if ($reclamo['id_categoria'] == 'PRODUCTO')
            X
            @endif
        </td>
        <td colspan="4" rowspan="2">
            <p>MONTO RECLAMADO: {{$reclamo['monto_reclamado']}} </p>
        </td>
    </tr>
    <tr>
        <td>SERVICIO</td>
        <td style="text-align: center"> 
            @if ($reclamo['id_categoria'] == 'SERVICIO')
            X
            @endif
        </td>
    </tr>
    <tr>
        <td id="datos" colspan="6">3.DETALLE DE LA RECLAMACION Y PEDIDO DEL CONSUMIDOR</td>
    </tr>
    <tr>
        <td>RECLAMO</td>

        <td style="text-align: center">
            @if ($reclamo['id_tipo'] == 'RECLAMO')
            X
            @endif
           
        </td>
        <td colspan="4" rowspan="2">DETALLE: {{$reclamo['detalle']}}</td>
    </tr>
    <tr>
        <td>QUEJA</td>
        <td style="text-align: center"> @if ($reclamo['id_tipo'] == 'QUEJA')
            X
            @endif</td>
    </tr>
    <tr>
        <td colspan="5" rowspan="2">
            <p id="pedido">PEDIDO: {{$reclamo['pedido']}}</p>
        </td>
        <td style=" height: 70px">
        </td>
    </tr>
    <tr>
        <td id="firma">FIRMA DEL CONSUMIDOR</td>
    </tr>
    <tr>
        <td id="datos" colspan="6">4.OBSERVACIONES Y ACCIONES ADOPTADAS POR EL PROVEEDOR</td>
    </tr>
    <tr style="text-align: center">
        <td colspan="2">FECHA DE RESPUESTA</td>
        <td>{{ \Carbon\Carbon::now()->format('d')}}</td>
        <td>{{ \Carbon\Carbon::now()->format('M')}}</td>
        <td>{{ \Carbon\Carbon::now()->format('Y')}}</td>
        <td rowspan="2" style="height: 70px;"> {{ Auth::user()->name}}</td>
    </tr>
    <tr>
        <td id="pedido" colspan="5" rowspan="2">
            <p>
                RESPUESTA: {{$reclamo['respuesta']}}
            </p>
        </td>
    </tr>
    <tr>
        <td id="firma">FIRMA DE PROVEEDOR</td>
    </tr>
</table>

</html>
