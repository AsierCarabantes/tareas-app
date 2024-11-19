<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Tarea;

class TrabajadorController extends Controller {

    public function index() {
        $trabajadores = Trabajador::all();
        return view('trabajadores.list', compact('trabajadores'));
    }
    
    public function create() {
        return view('trabajadores.create');
    }

    public function store(Request $request) {
        $trabajador = new Trabajador();

        $trabajador->nombre = $request->nombre;
        $trabajador->apellido = $request->apellido;
        $trabajador->dni = $request->dni;

        $trabajador->save();

        return redirect('/trabajadores/list');
    }

    public function show($id) {
        $trabajador = Trabajador::find($id);
        $tareas = Tarea::where('trabajador_id', $id)->get();
        return view('trabajadores.show', compact('trabajador', 'tareas'));
    }
}
