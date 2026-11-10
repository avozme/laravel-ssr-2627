<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('project_user')->insert([
            [
                'user_id' => 2,
                'project_id' => 1,
                'role' => 'developer',
                'contribution_hours' => 25.50,
            ],
            [
                'user_id' => 3,
                'project_id' => 1,
                'role' => 'designer',
                'contribution_hours' => 18.00,
            ],
            [
                'user_id' => 1,
                'project_id' => 2,
                'role' => 'developer',
                'contribution_hours' => 32.75,
            ],
            [
                'user_id' => 5,
                'project_id' => 3,
                'role' => 'project_manager',
                'contribution_hours' => 15.00,
            ],
            [
                'user_id' => 4,
                'project_id' => 5,
                'role' => 'analyst',
                'contribution_hours' => 12.50,
            ],
        ]);
    }
}
