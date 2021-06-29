<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $datos = \DB::table('peliculas')
            ->select('peliculas.*')
            ->orderBy('id', 'DESC')
            ->get();
        return view('controlAdmin.usuarios')
            ->with('productos', $datos);
    }
}