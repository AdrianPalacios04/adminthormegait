<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Persona;
use Illuminate\Http\Request;


class ClientController extends Controller
{
   
    public function index()
    {
         $client = Client::paginate(10);
         //$client->load('Persona');
         return view('client.index',compact('client'));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->update([
            "t_username"=> $request->input('t_username'),
            "t_correoper"=> $request->input('t_correoper'),
            "n_celular"=> $request->input('n_celular'),
            "t_password"=> $request->input('t_password')

        ]);
        // dd($reclamaciones);
        $client->persona->update([
            "t_nombreper" => $request->input('t_nombreper'),
            "t_apellidoper" => $request->input("t_apellidoper"),
            "c_dniper" => $request->input('c_dniper'),
            "d_nacimientoper" => $request->input('d_nacimientoper')
        ]);
        $notificacion = " Se modifico correctamente";
        return redirect('/users')->with(compact('notificacion'));
    }
}