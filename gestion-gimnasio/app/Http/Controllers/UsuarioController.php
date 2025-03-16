<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Membresia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email',
            'password' => 'required|string|min:6|confirmed',
            'foto_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'membresia' => 'required|in:Básica,Premium,VIP',
        ]);

        if (Usuario::where('email', $request->email)->exists()) {
            return back()->withErrors(['email' => 'Este correo ya está registrado.']);
        }

        $fotoPath = null;
        if ($request->hasFile('foto_perfil')) {
            $fotoPath = $request->file('foto_perfil')->store('fotos_perfil', 'public');
        }

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol' => 'usuario',
            'foto_perfil' => $fotoPath,
        ]);

        Membresia::create([
            'usuario_id' => $usuario->id,
            'tipo' => $request->membresia,
        ]);

        Auth::login($usuario);

        return redirect()->route('profile')->with('success', 'Te has registrado correctamente. ¡Bienvenido!');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('profile');
        } else {
            return back()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }
}
