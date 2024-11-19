<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Tarea;
use App\Models\Departamento;

class DepartamentoController extends Controller {
    
    public function index() {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    public function create() {
        $trabajadores = Trabajador::all();
        return view('departamentos.store', compact('trabajadores'));
    }

    public function store(Request $request) {
        $departamento = new Departamento();

        $departamento->nombre = $request->nombre;
        $departamento->responsable = $request->responsable;

        $departamento->save();

        return redirect('/departamentos/list');
    }
}
