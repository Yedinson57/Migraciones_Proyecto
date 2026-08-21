<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    private $ofertas = [
        1 => [
            'id' => 1,
            'titulo' => 'Tecnología en Análisis y Desarrollo de Software (ADSO)',
            'modalidad' => 'Presencial',
            'duracion' => '24 meses',
            'cupos' => 30,
            'centro' => 'Centro de Comercio y Servicios',
            'descripcion' => 'Aprende a diseñar, desarrollar e implementar sistemas de información con tecnologías modernas.',
            'requisitos' => 'Bachiller académico, prueba ICFES y disponibilidad de tiempo completo.',
            'imagen' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&auto=format&fit=crop'
        ],
        2 => [
            'id' => 2,
            'titulo' => 'Especialización en Seguridad en Aplicaciones Web',
            'modalidad' => 'Virtual',
            'duracion' => '6 meses',
            'cupos' => 25,
            'centro' => 'Centro de Electricidad y Electrónica',
            'descripcion' => 'Auditoría de código, mitigación de vulnerabilidades OWASP y aseguramiento de servidores.',
            'requisitos' => 'Título tecnólogo o profesional en áreas de sistemas o afines.',
            'imagen' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&auto=format&fit=crop'
        ]
    ];

    public function index()
    {
        return view('ofertas.index', ['ofertas' => $this->ofertas]);
    }

    public function show($id)
    {
        $oferta = $this->ofertas[$id] ?? abort(404);
        return view('ofertas.show', compact('oferta'));
    }
}