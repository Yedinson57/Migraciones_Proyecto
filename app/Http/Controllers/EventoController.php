<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    private $eventos = [
        1 => [
            'id' => 1,
            'titulo' => 'Feria de Innovación y Tecnología SENA 2026',
            'lugar' => 'Auditorio Principal - Centro de Formación',
            'fecha' => '2026-09-15',
            'hora' => '08:00 AM - 04:00 PM',
            'organizador' => 'SENANOVA',
            'descripcion' => 'Exposición de proyectos formativos destacados, ponencias de expertos y muestra empresarial.',
            'imagen' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&auto=format&fit=crop'
        ],
        2 => [
            'id' => 2,
            'titulo' => 'Hackathon de Desarrollo Web y Móvil',
            'lugar' => 'Ambiente 204 - Bloque Tecnológico',
            'fecha' => '2026-09-28',
            'hora' => '07:00 AM - 07:00 PM',
            'organizador' => 'Red de Informática',
            'descripcion' => 'Reto intensivo de 12 horas para resolver problemáticas reales mediante software.',
            'imagen' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800&auto=format&fit=crop'
        ]
    ];

    public function index()
    {
        return view('eventos.index', ['eventos' => $this->eventos]);
    }

    public function show($id)
    {
        $evento = $this->eventos[$id] ?? abort(404);
        return view('eventos.show', compact('evento'));
    }
}