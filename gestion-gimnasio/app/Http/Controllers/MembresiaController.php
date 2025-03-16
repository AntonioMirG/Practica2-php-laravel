<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Membresia;

class MembresiaController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'tipo' => 'required|in:Básica,Premium,VIP'
        ]);

        $membresia = Membresia::where('usuario_id', Auth::id())->first();
        if ($membresia) {
            $membresia->update(['tipo' => $request->tipo]);
        }

        return redirect('/profile')->with('success', 'Membresía actualizada.');
    }
}
