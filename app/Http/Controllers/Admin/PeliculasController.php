<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelicula;
use Validator;

class PeliculasController extends Controller
{
    public function index(){
        $datos=\DB::table('peliculas')
            ->select('peliculas.*')
            ->orderBy('id', 'DESC')
            ->get();
        return view('controlAdmin.peliculas')
        ->with('productos', $datos);
    }


    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre'=>'required|max:255|min:1',
            'idiomas'=>'required|max:255|min:1',
            'subtitulos'=>'required|min:1',
            'director'=>'required|min:1',
            'fecha'=>'required|max:255|min:1',
            'descripcion'=>'required|max:400|min:10|'
        ]);
        if($validator->fails()){
            dd('ERRRORRR');
            return back()
            ->withInput()
            ->with('errorEdit', 'Favor de llenar todos los campos')
            ->withErrors($validator);
        }else{
            
            $pelis=Pelicula::find($request->id);
            $pelis->Nombre=$request->nombre;
            $pelis->Idioma=$request->idioma;
            $pelis->Subtitulos=$request->subtitulos;
            $pelis->Director=$request->director;
            $pelis->Fecha=$request->fecha;
            $pelis->Descripcion=$request->descripcion;
            
            }
            $pelis->save();
            return back()->with('Listo', 'Se ha actualizado correctamente');
        }

    
}
