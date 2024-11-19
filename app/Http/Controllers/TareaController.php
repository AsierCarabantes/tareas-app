<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Tarea;

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

        $tarea->fecha_limite = $request->fecha_limite;
        $tarea->descripcion = $request->descripcion;
        $tarea->trabajador_id = $request->trabajador_id;

        $tarea->save();

        return redirect('/tareas/index');
    }

    public function edit($id) {
        $tarea = Tarea::find($id);
        $trabajadores = Trabajador::all();
        return view('tareas.edit', compact('tarea', 'trabajadores'));
    }

    public function update($id, Request $request) {
        Tarea::where('id', $id)->update(['fecha_limite'=> $request->input('fecha_limite'),
                                         'descripcion' => $request->input('descripcion'),
                                         'trabajador_id' => $request->input('trabajador_id')
        ]);
        return redirect('/tareas/index');
    }

    public function destroy($id) {
        Tarea::where('id', $id)->delete();

        return redirect('/tareas/index');
    }
}
