<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acertijo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleeare('auth')->only('create'); solo el metodo create va a estar protegido por usuario y constraseña
    //     $this->middleeare('auth')->except('create');
    // }
    public function index()
    {
        //dd(Auth::user()->role);
        
         $client = User::where('estado',1)->paginate(8);
         return view('admin.index', compact('client'));
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name'=>'required|min:3',
            'lastname'=>'required|min:3',
            'email'=>'required|email',
        ];
        $this->validate($request,$rules);

        //mass assigment: asignacion masiva
        User::create(
            $request->only('username','name','lastname','email','role')
            + [
                
                'password'=> bcrypt($request->input('password'))
            ]
        );
        $notification = 'El nuevo usuario se ha registrado correctamente';
        return redirect('/client')->with(compact('notification'));

    }
    public function edit($id)
    {
        $client = User::findOrFail($id);
        return view('admin.edit',compact('client'));
    }

    
    public function update(Request $request, $id)
    {
        $rules = [
            'username'=>'required|min:3',          
            'name'=>'required|min:3',
            'lastname'=>'required|min:3',
            'email'=>'required|email',
        ];
        $this->validate($request,$rules);

        //mass assigment: asignacion masiva
        $user = User::findOrFail($id);
        $data = $request->only('username','name','lastname','email');
        $password = $request->input('password');
        if ($password) {
            $data['password'] = bcrypt($password);
        }
        $user->fill($data);
        $user->save();//UPDATE
        $notification = 'La informacion del usuario se ha actualizado correctamente';
        return redirect('/client')->with(compact('notification'));
    }

   
    public function changeId(User $client,$id)
    {
        $find = User::findOrFail($id);
       $find -> estado = false;
       $find->save();
        $notification = "EL usuario se ha eliminado correctamente";
        return redirect('/client')->with(compact('notification'));
    }
}