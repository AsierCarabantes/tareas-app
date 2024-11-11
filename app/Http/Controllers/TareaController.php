<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

use App\Models\Trabajador;

class TareaController extends Controller {

    public function index() {
        return view('tareas.index');
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

        //Tarea::create($request->all()) // Asignación masiva. Hay que añadir una cosilla al model
    }
}
