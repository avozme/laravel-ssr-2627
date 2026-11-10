<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'user_id' => 1,
                'title' => 'Desarrollo de tienda online',
                'description' => 'Creación de una plataforma de comercio electrónico con Laravel.',
                'due_date' => '2026-12-15',
                'status' => 'in_progress',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => 'Aplicación de gestión de tareas',
                'description' => 'Aplicación web para organizar tareas y proyectos de equipo.',
                'due_date' => '2026-12-20',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'title' => 'Rediseño de página corporativa',
                'description' => 'Actualización del diseño y experiencia de usuario de la web corporativa.',
                'due_date' => '2026-11-30',
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'title' => 'Sistema de reservas',
                'description' => 'Desarrollo de un sistema de reservas para hoteles y restaurantes.',
                'due_date' => '2027-01-15',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'title' => 'Portal de formación online',
                'description' => 'Plataforma educativa con cursos, alumnos y seguimiento del progreso.',
                'due_date' => null,
                'status' => 'in_progress',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
