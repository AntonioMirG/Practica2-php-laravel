<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserva;
use App\Models\Clase;

class ReservaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'clase_id' => 'required|exists:clases,id',
            'fecha_reserva' => 'required|date',
        ]);

        Reserva::create([
            'usuario_id' => Auth::id(),
            'clase_id' => $request->clase_id,
            'fecha_reserva' => $request->fecha_reserva
        ]);

        return redirect('/profile')->with('success', 'Reserva realizada con éxito.');
    }

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        if ($reserva->usuario_id == Auth::id()) {
            $reserva->delete();
            return redirect('/profile')->with('success', 'Reserva cancelada.');
        }

        return redirect('/profile')->withErrors('No puedes cancelar esta reserva.');
    }
}
