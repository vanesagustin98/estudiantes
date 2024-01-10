<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //
    public function index(){
        $datos['estudiantes']=Estudiante::get();
        return view('estudiantes.index',$datos);
    }

    public function preAdicionar(){
        return view('estudiantes.adicionar');
    }

    public function adicionar(Request $request){
        $datosEstudiante=$request->except('_token');
        Estudiante::insert($datosEstudiante);
        return redirect('/estudiantes');
    }

    public function editar($id){
        $datos['estudiante']=Estudiante::find($id);
        return view('estudiantes.editar',$datos);
    }

    public function actualizar(Request $request, $id){
        $datosEstudiante=$request->except('_token','_id','_method');
        Estudiante::find($id)->update($datosEstudiante);
        return redirect('/estudiantes');
    }

    public function borrar($id){
        Estudiante::find($id)->delete();
        return redirect('/estudiantes');
    }
}
