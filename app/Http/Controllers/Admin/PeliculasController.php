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

    public function add(Request $requests){
        //dd($requests->all());
        $validar = Validator::make($requests->all(),[
            'nombre'=>'required|max:255|min:1',
            'idioma'=>'required|max:255|min:1',
            'subtitulos'=>'required|min:1',
            'director'=>'required|min:1',
            'fecha'=>'required|max:255|min:1',
            'descripcion'=>'required|max:400|min:10|' 
        ]); 

        if($validar ->fails()){
            return back()
            ->withInput()
            ->with('error','Favor de llenar los datos correctamente')
            ->withErrors($validar);
        }else{
            //dd($requests->all());
            $convenio = Pelicula::create([
                'Nombre' => $requests ->nombre,
                'Idioma' => $requests ->idioma,
                'Subtitulos' => $requests -> subtitulos,
                'Director' => $requests -> director,
                'Fecha' => $requests -> fecha,
                'Descripcion' => $requests -> descripcion
            ]);
            return back()->with('Listo', 'Se ha insertado correctamente');
        }
        return back()->with('Listo', 'Se ha insertado correctamente');
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
            return back() 
            ->withInput()
            ->with('error', 'Favor de llenar todos los campos')
            ->withErrors($validator);
        }else{
            
            $pelis=Pelicula::find($request->id);
            $pelis->Nombre=$request->nombre;
            $pelis->Idioma=$request->idiomas;
            $pelis->Subtitulos=$request->subtitulos;
            $pelis->Director=$request->director;
            $pelis->Fecha=$request->fecha;
            $pelis->Descripcion=$request->descripcion;
            
            }
            $pelis->save();
            return back()->with('Listo', 'Se ha actualizado correctamente');
        }

        public function del(Request $request){
            $pelis = Pelicula::find($request->id);
            $valida = Validator::make($request->all(),[
                'id' => 'required'
            ]);
            if($valida ->fails()){
                return back()
                ->withInput()
                ->with('error','Ha ocurrido un error')
                ->withErrors($valida);
            }else{ 
                    $pelis->delete();
                    
                    return back()->with('Listo', 'Se ha borrado correctamente');
            }
        }
}
