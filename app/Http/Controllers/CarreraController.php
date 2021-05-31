<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class CarreraController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {  
            $data = Carrera::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'name', 'start', 'end']);
            return response()->json($data);
        }
        // $race = Carrera::all();
        return view('race.index');
    }
    public function calendarEvents(Request $request)
    {
 
        switch ($request->type) {
           case 'create':
              $event = Carrera::create([
                  'name' => $request->name,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'edit':
              $event = Carrera::find($request->id)->update([
                  'name' => $request->name,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Carrera::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # ...
             break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('race.create');
    }

    public function store(Request $request)
    {        
        // $carbon = new Carbon();
        // $day[] = $carbon->toDateString();
        // dd($day)

        // la -> es para jalar una instancia de cualquier valor
        $name = $request->name;
        
        $start = $request->start;
        $end = $request->end;
        
        
        $data = [];
        for ($i=0; $i < count($name) ; $i++) {
            $data[] = [
                'name'  => $name[$i],
                'start'=> $start[$i],
                'end'=>  $end[$i],
                // 'premio'    =>  $premio[$i],
                // 'cantidad'  =>  $cantidad[$i]
            ];
           
        }
        //dd($data);
        
        Carrera::insert($data);
        $notification = 'redirect';
        return redirect('/race')->with(compact('notification'));
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        //
    }
}