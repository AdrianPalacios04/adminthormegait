<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\ThorPaga;
use App\Models\ThorTicket;
use App\Models\TipoPremio;
use App\Models\ConfigCarrera;
use App\Models\CarreraTotal;
use Illuminate\Http\Request;

class CarreraController extends Controller

{
    public function index(Request $request)
    {
    $race = Carrera::all();
    $con = ConfigCarrera::find(1);
    return view('race.index',compact('race','con'));
    }
   
    public function create()
    {
        $type = TipoPremio::where('premio',30)->get();
        $name = Thorticket::all();
        $config = ConfigCarrera::first();
        return view('race.create',compact('type','name','config'));
    }

    public function store(Request $request)
    {        
       $race = $request->all();
       
       Carrera::create($race);

       return redirect('/race')->with(compact('race'));

    }
    public function show(Carrera $carrera)
    {
        //
    }
    public function edit(Request $request,$id)
    {
        $race = Carrera::find($id);
       
        $config = ConfigCarrera::all();  
        return view('race.edit',compact('race','config'));
    }
    public function update(Request $request,$id)
    {
      
        $race = Carrera::findOrFail($id);
        $race->update([
            "inicio"=> $request->input('inicio'),
            "final"=> $request->input('final'),
            "id_px"=> $request->input('id_px'),
            "id_ax"=> $request->input('id_ax'),
            "px_1"=> $request->input('px_1'),
            "px_2"=> $request->input('px_2')
        ]);
        // $race->fill($data);
        //dd($race);
        // $race->save();//UPDATE
        return redirect('/race')->with(compact('race'));
        
    }
    public function updateConfig(Request $request)
    {   
        $config = ConfigCarrera::find(1);
         $config->update($request->all());
        return redirect()->route('race.index')
        ->with('success','User deleted successfully');{
            
        }
    }
    public function RaceAll()
    {
        $racet = CarreraTotal::orderBy('inicio', 'ASC')->paginate(25);
        $con = ConfigCarrera::find(1);
        return view('race.raceall',compact('racet','con'));
    }
}

 