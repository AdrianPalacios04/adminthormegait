<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acertijo;

class SupAcertijoController extends Controller
{
    public function index()
    {
        $acertijo = Acertijo::paginate(8);
        return view('supacertijo.index', compact('acertijo'));
    }


    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function getIniciales(){
        $findUser = User::find(auth()->id());
        $findUser->name;
        $explode = explode(' ',$findUser);
        foreach($explode as $x){
            $name .=  $x[0];
        }
    }
}