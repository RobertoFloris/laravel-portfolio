<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->title = $faker->sentence();
            $newProject->author = $faker->name();
            $newProject->type_id = rand(1, 4);
            $newProject->content = $faker->paragraph(12);

            $newProject->save();
        }
    }
}
