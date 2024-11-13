<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

use App\Models\Trabajador;

class TareaController extends Controller {

    public function index() {
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }

    public function create() {
        $trabajadores = Trabajador::all();
        return view('tareas.create', compact('trabajadores'));
    }

    public function store(Request $request) {
        $tarea = new Tarea();

        $tarea->titulo = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;

        $tarea->save();

        return redirect('/tareas/index');

        //Tarea::create($request->all()) // Asignación masiva. Hay que añadir una cosilla al model
    }

    /*
    public function edit($id) {
        $trabajador = Trabajador::find($id);
        return view('trabajadores.edit', compact('trabajador'));
    }

    */
    
    public function edit() {
        $trabajadores = Trabajador::all();
        return view('tareas.edit', compact('trabajadores'));
    }

    public function update(Request $request, $id) {
        $tarea = Tarea::find($id);

        $tarea->titulo = $request->nombre;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->trabajador_id = $request->trabajador_id;

        $tarea->save();
    }

    public function destroy($id) {
        $tarea = Tarea::find($id);
        $tarea->delete();
        return "Tarea eliminada correctamente";
    }
}
