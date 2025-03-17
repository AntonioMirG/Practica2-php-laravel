<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function crearReserva(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'clase_id' => 'required|exists:clases,id',
            'fecha' => 'required|date',
        ]);

        $reserva = new Reserva();
        $reserva->usuario_id = $request->usuario_id;
        $reserva->clase_id = $request->clase_id;
        $reserva->fecha = $request->fecha;
        $reserva->save();

        return response()->json(['message' => 'Reserva creada con éxito'], 201);
    }

    public function listarReservas()
    {
        $reservas = Reserva::with(['usuario', 'clase'])->get();
        return response()->json($reservas);
    }
}