<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    private $anuncios = [
        1 => [
            'id' => 1,
            'titulo' => 'Taller de Hoja de Vida y Entrevistas',
            'categoria' => 'Bienestar',
            'fecha' => '2026-09-02',
            'autor' => 'Bienestar al Aprendiz',
            'resumen' => 'Aprende a redactar un perfil profesional atractivo para el inicio de tu etapa productiva.',
            'contenido' => 'Organizado por Bienestar al Aprendiz. Aprende a redactar un perfil profesional atractivo para el inicio de tu etapa productiva.',
            'imagen' => 'https://www.las2orillas.co/wp-content/uploads/2023/11/sena-cursos-convocatoria.jpg'
        ],
        2 => [
            'id' => 2,
            'titulo' => 'Convocatoria de Apoyos de Sostenimiento 2026',
            'categoria' => 'Bienestar',
            'fecha' => '2026-08-20',
            'autor' => 'Bienestar al Aprendiz',
            'resumen' => 'Abierta la recepción de documentos para el subsidio de transporte y alimentación.',
            'contenido' => 'Se encuentran abiertas las postulaciones para el programa de Apoyo de Sostenimiento. Consulta los requisitos en la oficina de Bienestar al Aprendiz o descarga la circular informativa.',
            'imagen' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&auto=format&fit=crop'
        ],
        3 => [
            'id' => 3,
            'titulo' => 'Mantenimiento Programado de la Plataforma LMS',
            'categoria' => 'Sistemas',
            'fecha' => '2026-08-25',
            'autor' => 'Coordinación Académica',
            'resumen' => 'Este fin de semana se realizará una actualización en los servidores del centro.',
            'contenido' => 'Estimada comunidad, les informamos que el próximo sábado a partir de las 10:00 PM se llevará a cabo un mantenimiento preventivo en la plataforma virtual. El servicio se restablecerá el domingo a las 6:00 AM.',
            'imagen' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800&auto=format&fit=crop'
        ],
    ];

    public function index()
    {
        return view('anuncios.index', ['anuncios' => $this->anuncios]);
    }

    public function show($id)
    {
        $anuncio = $this->anuncios[$id] ?? abort(404);
        return view('anuncios.show', compact('anuncio'));
    }
}