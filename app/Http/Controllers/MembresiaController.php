<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembresiaController extends Controller
{
    public function mostrarMembresia()
    {
        $usuario = Auth::user();
        $membresia = Membresia::where('usuario_id', $usuario->id)->first();
        
        return view('profile', compact('usuario', 'membresia'));
    }

    public function actualizarMembresia(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string',
        ]);

        $usuario = Auth::user();
        $membresia = Membresia::updateOrCreate(
            ['usuario_id' => $usuario->id],
            ['tipo' => $request->tipo]
        );

        return redirect()->back()->with('success', 'Membresía actualizada correctamente.');
    }
}