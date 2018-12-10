<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('inicio');
    }
    public function perfil(){
        return view('usuario.perfil');
    }
} 

