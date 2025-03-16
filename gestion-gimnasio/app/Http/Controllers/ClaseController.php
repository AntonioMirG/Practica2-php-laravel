<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    public function index()
    {
        return view('classes', ['clases' => Clase::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'profesor_id' => 'required|exists:usuarios,id'
        ]);

        Clase::create($request->all());

        return redirect('/classes')->with('success', 'Clase creada correctamente.');
    }

    public function destroy($id)
    {
        Clase::findOrFail($id)->delete();
        return redirect('/admin')->with('success', 'Clase eliminada.');
    }
}
