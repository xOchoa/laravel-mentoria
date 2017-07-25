<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('users',[
            'url_store'=>route('user.update',['id'=>1])
        ]);
    }
    public function show($id){
        return $id;
    }
    public function store(Request $request){
        /*
         * El objeto derivado de FormRequest permite accesar a la informacion de la peticion tal como los datos que contiene
         */
        $data = $request->all();
        dd($data);
    }
    public function update(Request $request,$id){
        $data = $request->all();
        dd($data);
    }
    public function hash(){
        return Hash::make('test');
    }
}
