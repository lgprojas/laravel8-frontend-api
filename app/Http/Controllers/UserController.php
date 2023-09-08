<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller{

    public function index(){

         $response = HTTP::get('https://jsonplaceholder.org/users');
         $usuarios = $response->json();
        return view('user/index')->with('usuarios', $usuarios);
        //return view('user/index');
    }

    public function newUser(){
        return view('user/nuevo');
    }
}
