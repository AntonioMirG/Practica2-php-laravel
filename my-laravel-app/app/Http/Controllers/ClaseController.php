<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::all();
        return view('classes', compact('clases'));
    }

    public function show($id)
    {
        $clase = Clase::findOrFail($id);
        return view('class_detail', compact('clase'));
    }
}