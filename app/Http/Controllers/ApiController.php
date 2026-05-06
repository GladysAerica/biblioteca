<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;
use App\Http\Resources\LibroResource;
use App\Models\Prestamo;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        # validar los datos de inicio de sesion
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        #intentar iniciar sesion
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $token = $request->user()->createToken('api-token')->plainTextToken;

            return ['token' => $token];
        }
 
        return ['error' =>'Datos incorrectos'];
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    
        return ['data' => 'Sesión cerrada'];
    }

    public function libros_disponibles()
    {
        $libros = Libro::where ('estatus', 0)-> orderBy('id', 'asc')->get();
        $libros_resource = LibroResource::collection($libros);

        return $libros_resource;
    }

    public function entregar_libro(Request $request)
    {
        $request ->validate([
            'prestamo_id' => 'required|exists:prestamos,id',
        ]);

        $id = $request->input('prestamo_id');

        \DB::beginTransaction();
        try {
        $prestamo = Prestamo::findOrFail($id);
        $prestamo->estado = 'entregado';
        $prestamo->fecha_entrega = now();
        $prestamo->save();

        $libro = Libro::findOrFail($prestamo->libro_id);
        $libro->estatus = 0;
        $libro->save();

        \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            return ['error' => 'Error al registrar prestamo.'] ;
        }
        return ['data' => 'Libro entregado exitosamente'];
    }
}
