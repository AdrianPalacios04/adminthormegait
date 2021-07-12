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
<table border="1">
    <tr>
        <td colspan="5" style="text-align: center;">LIBRO DE RECLAMACIONES</td>
        <td id="hoja" rowspan="2">HOJA DE RECLAMACIÓN
            <br>{{ $reclamoId }}
        </td>
    </tr>
    <tr>
        <th id="fecha">FECHA</th>
        <th>DIA</th>
        <th colspan="2">MES</th>
        <th>AÑO</th>
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
        <td colspan="6">NOMBRE:</td>
    </tr>
    <tr>
        <td colspan="6">DOMICILIO:</td>
    </tr>
    <tr>
        <td colspan="2">DNI/CE:</td>
        <td colspan="4">TELEFONO/EMAIL:</td>
    </tr>
    <tr>
        <td id="datos" colspan="6">
            2.IDENTIFICACION DEL BIEN CONTRATADO
        </td>
    </tr>
    <tr>
        <td>PRODUCTO</td>
        <td></td>
        <td colspan="4" rowspan="2">
            <p>MONTO RECLAMADO:</p>
            <p>DESCRIPCIÓN:</p>
        </td>
    </tr>
    <tr>
        <td>SERVICIO</td>
        <td></td>
    </tr>
    <tr>
        <td id="datos" colspan="6">3.DETALLE DE LA RECLAMACION Y PEDIDO DEL CONSUMIDOR</td>
    </tr>
    <tr>
        <td>PRODUCTO</td>
        <td></td>
        <td colspan="4" rowspan="2">DETALLE:</td>
    </tr>
    <tr>
        <td>QUEJA</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5" rowspan="2">
            <p id="pedido">PEDIDO:</p>
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
    <tr>
        <td colspan="2">FECHA DE RESPUESTA</td>
        <td>{{ \Carbon\Carbon::now()->format('d')}}</td>
        <td>{{ \Carbon\Carbon::now()->format('M')}}</td>
        <td>{{ \Carbon\Carbon::now()->format('Y')}}</td>
        <td rowspan="2" style="height: 70px;"> {{ Auth::user()->name}} {{ Auth::user()->lastname}}</td>
    </tr>
    <tr>
        <td id="pedido" colspan="5" rowspan="2">
            <p>
                RESPUESTA: {{$respuesta}}
            </p>
        </td>

    </tr>
    <tr>
        <td id="firma">FIRMA DE PROVEEDOR</td>
    </tr>
</table>

</html>
