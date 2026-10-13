<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;

class AlquilerController extends Controller
{
    public function index()
    {
        $alquileres = Alquiler::with(['cliente', 'empleado', 'detalles.equipo'])->get();
        dd($alquileres);
    }
}