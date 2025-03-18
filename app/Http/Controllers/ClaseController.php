<?php
namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::all();
        return view('clases.index', compact('clases'));
    }

    public function create()
    {
        return view('clases.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'profesor_asignado' => 'required|string|max:255',
        ]);

        // Crear una nueva clase
        $clase = new Clase();
        $clase->nombre = $request->nombre;
        $clase->descripcion = $request->descripcion;
        $clase->profesor_asignado = $request->profesor_asignado;
        $clase->save();

        // Redirigir a la página de administración
        return redirect()->route('admin')->with('success', 'Clase creada exitosamente.');
    }

    public function edit($id)
    {
        $clase = Clase::findOrFail($id);
        return view('clases.edit', compact('clase'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'profesor_asignado' => 'required|string|max:255',
        ]);

        // Actualizar la clase
        $clase = Clase::findOrFail($id);
        $clase->nombre = $request->nombre;
        $clase->descripcion = $request->descripcion;
        $clase->profesor_asignado = $request->profesor_asignado;
        $clase->save();

        // Redirigir a la página de administración
        return redirect()->route('admin')->with('success', 'Clase actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $clase = Clase::findOrFail($id);
        $clase->delete();

        // Redirigir a la página de administración
        return redirect()->route('admin')->with('success', 'Clase eliminada exitosamente.');
    }

    public function reservar($id)
    {
        $clase = Clase::findOrFail($id);
        $usuario = Auth::user();

        // Crear una nueva reserva
        $reserva = new Reserva();
        $reserva->usuario_id = $usuario->id;
        $reserva->clase_id = $clase->id;
        $reserva->fecha_reserva = now(); // Proporcionar un valor para el campo fecha_reserva
        $reserva->save();

        return redirect()->route('classes')->with('success', 'Clase reservada exitosamente.');
    }
}