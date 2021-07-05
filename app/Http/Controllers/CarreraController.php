<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\ThorPaga;
use App\Models\ThorTicket;
use App\Models\TipoPremio;
use App\Models\ConfigCarrera;
use Illuminate\Http\Request;
class CarreraController extends Controller

{
    public function index(Request $request)
    {
    $race = Carrera::all();
    $config = ConfigCarrera::all();
    return view('race.index',compact('race','config'));
    // if($request->ajax())
    	// {
        //     $validated = $request->validate([
        //         'inicio' => 'required',
        //         'final' => 'required',
        //     ]);
        //     $carrera = Carrera::all();
        //     // $inicio = $carrera->inicio;
        //     // $final = $carrera->final;
        //     $data = $carrera->where('inicio', '>=', $inicio)
        //     ->where('final', '<=', $final)->get();
        //     return response()->json($data);
        //     //return  dd($data)->toArray();
    	// }
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('race.create');
    }

    public function store(Request $request)
    {        
        // $carbon = new Carbon();
        // $day[] = $carbon->toDateString();
        // dd($day)

        // la -> es para jalar una instancia de cualquier valor
        // $name = $request->name;
        
        // $start = $request->start;
        // $end = $request->end;
        
        
        // $data = [];
        // for ($i=0; $i < count($name) ; $i++) {
        //     $data[] = [
        //         'name'  => $name[$i],
        //         'start'=> $start[$i],
        //         'end'=>  $end[$i],
        //         // 'premio'    =>  $premio[$i],
        //         // 'cantidad'  =>  $cantidad[$i]
        //     ];
           
        // }
        // //dd($data);
        
        // Carrera::insert($data);
        // $notification = 'redirect';
        // return redirect('/race')->with(compact('notification'));
        //  $notification = "El acertijo se creo correctamente";
        //  return view('race',compact('notificacion'));
        // // // $insert = [];
        // for ($i=0; $i <count(request('day')) ; $i++) { 
        //     $inserts[] =[
        //         'day' => request("day.{$i}"),
        //         'time_start'=>request("time_start.{$i}"),
        //         'time_final'=>request("time_final.{$i}"),
        //         'premio'=>request("premio.{$i}"),
        //         'cantidad'=>request("cantidad.{$i}"),
        //         'active'=>request("active.{$i}")
        //     ]
        // }

    }
    public function show(Carrera $carrera)
    {
        //
    }
    public function edit(Request $request,$id)
    {
        $race = Carrera::find($id);
        $type = TipoPremio::all();
        if($request->get('tipo_ticket') == 'ticket'){
            $ticket = Thorticket::all();
        }else{
            $ticket = ThorPaga::all();
        }
           
        return view('race.edit',compact('race','type','ticket'));
    }
    public function update(Request $request,$id)
    {
      
        $race = Carrera::findOrFail($id);
        // $data = $request->only('inicio','final','id_ax','id_px','px_1','px_2');
        $race->update([
            "inicio"=> $request->input('inicio'),
            "final"=> $request->input('final'),
            "id_ax"=> $request->input('id_ax'),
            "id_px"=> $request->input('id_px'),
            "px_1"=> $request->input('px_1'),
            "px_2"=> $request->input('px_2')
        ]);
        // $race->fill($data);
        //dd($race);
        // $race->save();//UPDATE
        return redirect('/race')->with(compact('race'));
        
    }
    // public function configcarrera()
    // {
      
    //     return view('race.index',compact('config'));
    // }

    public function updateConfig(Request $request)
    {
        $config = ConfigCarrera::find($request->id);
        $config->cant_ax_cash =   $request->cant_ax_cash;
        $config->cant_ax_ticket =  $request->cant_ax_ticket;
        $config->inicio = $request->inicio;
        $config->intervalo =   $request->intervalo;
        $config->duration =  $request->duration;
        $config -> save();
        return response()->json($config) ;
    }
}

 