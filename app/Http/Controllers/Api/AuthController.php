<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Importar User
use Illuminate\Support\Facades\Validator; // Importar Validator
use Illuminate\Support\Facades\Hash; // Importar Hash
use Illuminate\Support\Facades\Auth; // Importar Auth

class AuthController extends Controller {
    
    public function register(Request $request) {
        $validateUser = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        if($validateUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateUser->errors()
            ], 401);
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            //'token' => $user->createToken("API TOKEN")->plainTextToken  // No es necesario (solo si lo pide el enunciado)
        ], 201);
    }

    public function login(Request $request) {
        $validateUser = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if($validateUser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validateUser->errors()
            ], 401);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Credenciales incorrectas',
            ], 401);
        }

        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Login exitoso',
            'token' => $token,
            'email' => $user->email,
            'password' => $user->password
        ], 200);
    }

    public function logout(Request $request) {
        
        $request->user()->tokens()->delete();
    
        return response()->json([
            'status' => true,
            'message' => 'Sesión cerrada correctamente'
        ], 200);
    }
}
