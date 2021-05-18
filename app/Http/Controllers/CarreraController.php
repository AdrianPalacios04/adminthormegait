<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class CarreraController extends Controller
{
    public function index()
    {
        $race = Carrera::all();
        return view('race.index',compact('race'));
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
        $day = $request->day;
        $active = $request->active;
        $time_start = $request->time_start;
        $time_final = $request->time_final;
        $premio = $request->premio;
        $cantidad = $request->cantidad;
        
        $data = [];
        for ($i=0; $i < count($day) ; $i++) {
            $data[] = [
                'day'       => $day[$i],
                'time_start'=> $time_start[$i],
                'time_final'=>  $time_final[$i],
                'premio'    =>  $premio[$i],
                'cantidad'  =>  $cantidad[$i]
            ];
           
        }
        //dd($data);
        
        Carrera::insert($data);
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