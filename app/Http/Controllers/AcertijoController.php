<?php

namespace App\Http\Controllers;

use App\Models\Acertijo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AcertijoController extends Controller
{
    public function index()
    {
       //$findUser = User::find(auth()->id());
         if (auth()->user()->role == 'admin') {
            $acertijo = Acertijo::paginate(10);
          }elseif(auth()->user()->role == 'supacertijero') {
            $acertijo = Acertijo::paginate(10);
        }else{
            $acertijo = Acertijo::where('user_id',Auth::id())->where('i_uso',true)->paginate(8);
         }
        // dd($acertijo);
        return view('acertijo.index',compact('acertijo'));
    }
    
    public function create()
    {
        return view('acertijo.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pregunta' => 'required',
        //     'respuesta' => 'required',
        // ]);

        //  $user = User::find(auth()->id());
        //  $pregunta = $request->pregunta;
        //  $respuesta = $request->respuesta;

        //  $data = [];
        //  for ($i=0; $i < count($pregunta) ; $i++) {
        //      $data[] = [
        //          'pregunta' => $pregunta[$i],
        //          'respuesta'=> $respuesta[$i],
        //          'user_id'=> $user->id
                 
        //           'time_final'=>  $time_final[$i],
        //           'premio'    =>  $premio[$i],
        //           'cantidad'  =>  $cantidad[$i]
        //      ];
         
        $acertijo = $request->all();
        // $acertijo['user_id'] = $user->id;
        // }
        dd($acertijo);
        //  Acertijo::insert($data);
        // $notification = "El acertijo se creo correctamente";
        // return redirect('/acertijo')->with(compact('notification'));
    }
    
    public function edit(Request $request, $id)
    {
        $acertijo = Acertijo::findOrFail($id);
        return view('acertijo.edit',compact('acertijo'));
    }

    public function update(Request $request,$id)
    {

        //mass assigment: asignacion masiva
        $acertijo = Acertijo::findOrFail($id);
        $data = $request->only('pregunta','respuesta');
        
        $acertijo->fill($data);
        $acertijo->save();//UPDATE
        $notification = 'Se edito el acertijo se ha actualizado correctamente';
        return redirect('/acertijo')->with(compact('notification'));
    }

    public function destroy(Acertijo $acertijo)
    {
        
        $acertijo->delete();
        $notificacion = "El acertijo se ha eliminado correctamente";
        return redirect('/acertijo')->with(compact('notificacion'));
    }
    public function changeUse(Request $request)
    {
        $acertijo = Acertijo::find($request->id);
        $acertijo -> i_uso = $request->i_uso;
        //dd($acertijo);
        $acertijo->save();
        return response()->json(['success' => 'Uso Activo']);
    }
    public function Import()
    {
        $import = new ThorPagaImport();
        Excel::import($import,$request->file('file'));
        return view('thorpaga.index',['numRows'=>$import->getRowCount()]);
    }
}