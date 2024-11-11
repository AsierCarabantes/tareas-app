<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;  // El use es del namespace, no la ruta de carpetas

class TrabajadorController extends Controller {

    public function index() {
        $trabajadores = Trabajador::all(); // Recoger todo los trabajadores
        return view('trabajadores.index', compact('trabajadores'));
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

        //return view('trabajadores.index')
        return redirect('/trabajadores/index'); // Si quieres volver a la vista hay que hacer 'redirect', no 'view'.
    }
}
