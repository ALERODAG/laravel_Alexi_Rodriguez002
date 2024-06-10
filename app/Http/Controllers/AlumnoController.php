<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
//borra la imagen anterior
use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function requisitos()
     {
         //
         $alumnos = Alumno::all();

         return view('alumnos.requisitos');


     }


    public function index()
    {
        //
        $alumnos = Alumno::all();
        $datos['alumnos'] = Alumno::paginate(20);
        return view('alumnos.listado',$datos);


    }

    public function inicio()
    {
        //
        $alumnos = Alumno::all();
        $datos['alumnos'] = Alumno::paginate(20);
        return view('alumnos.inicio',$datos);


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('alumnos.create');

    }

    /**
     * NOS PERMITE RECOPIAR LA INFORMACION SOLICITADA
     */
    public function store(Request $request)
    {
        //se opriene toda la informacion que le nviaron//

        $datosAlumnos = request()->all();

       $datosAlumnos = request()->except('_token');

       //pregunta si la el campo foto tiene contenido y lo alreamos antes de incertarlo
       if($request->hasFile('foto')){
            $datosAlumnos['foto'] = $request->file('foto')->store('uploads','public');
       }


       //usa el modelo alumno

       Alumno::insert($datosAlumnos);
        //return response()->json($datosAlumnos);
        return redirect('alumnos')->with('mensaje','Alumno agregado con exito');

    }

    /**
     * .
     */
    public function show($id)
    {
        //

        $alumno = Alumno::findOrFail($id);
        // dd($mostrar);
        return view('alumnos.show', compact('alumno'));/*usamos la variable anterior sin el signo pesos*/

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $alumno= Alumno::findOrFail($id);
        return view('alumnos.edit',compact('alumno'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosAlumnos = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $alumno= Alumno::findOrFail($id);
            Storage::delete('public/'.$alumno->foto);

            $datosAlumnos['foto'] = $request->file('foto')->store('uploads','public');
       }

        Alumno::where('id','=',$id)->update($datosAlumnos);

        $alumno= Alumno::findOrFail($id);
        return view('alumnos.edit',compact('alumno'));
        //return redirect('alumnos')->with('mensaje','Alumno modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //OrFail
        $alumno= Alumno::findOrFail($id);
        if(Storage::delete('public/'.$alumno->foto)){

        Alumno::destroy($id);
        }

      return redirect('alumnos');

    }

}
