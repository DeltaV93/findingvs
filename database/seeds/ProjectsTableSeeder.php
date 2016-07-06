<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voi
     */
    public function run()
    {
        $faker = faker::create();
        foreach (range(1,7) as $index) {
            DB::table('projects')->insert([
                'project_title' => $faker->word,
                'project_image' => $faker->imageUrl($width = 640, $height = 480),
                'project_description' => $faker->paragraph,
                'project_tools' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            ]);
        }

    }
}
