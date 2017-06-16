<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $data = $request->all();
        dd($data);
    }
    public function update(Request $request,$id){
        $data = $request->all();
        dd($data);
    }
}
