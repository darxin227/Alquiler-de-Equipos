<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleAlquiler;

class DetalleAlquilerController extends Controller
{
    public function index()
    {
        $detalleAlquilers = DetalleAlquiler::with(['alquiler', 'equipo'])->get();
        dd($detalleAlquilers);
    }
}