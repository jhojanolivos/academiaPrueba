<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "nombre" => "required",
            "apellido" => "required",
            "email" => "required|email",
            "telefono" => "required",
            "programa" => "required",
        ]);
        $estudiante = new Estudiante;
        /*$estudiante->nombre= $request->nombre;
        $estudiante->apellido= $request->apellido;
        $estudiante->email= $request->email;
        $estudiante->telefono= $request->telefono;
        $estudiante->programa= $request->programa;
        $estudiante->contacto=false;*/
        $estudiante->updateOrCreate([
            'email' => $request->email,
        ], [
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'programa' => $request->programa,
            'contacto' => false
        ]);
        return view('formulario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showAll(Request $request)
    {
        $nombre=$request->get('nombre');

        if($nombre==null){
            $estudiantes =   Estudiante::get();
        }else{
            $estudiantes= Estudiante::where('nombre', 'like', '%' . $nombre . '%')
            ->orWhere('apellido', 'like', '%'. $nombre  . '%')
            ->orWhere('programa', 'like', '%'. $nombre  . '%')->get(); 
        }

        return view('listado')->with('estudiantes', $estudiantes);
    }

    public function call(Request $request)
    {
        Estudiante::where('id',$request->id,)
        ->update(['contacto' => true]); 
        
       return $this->showAll($request);
    }

    public function buscar(Request $request)
    {
       
        
        return view('listado')->with('estudiantes', $estudiante);
    }
}
