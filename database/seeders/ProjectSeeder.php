<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++) {

            $new_project = new Project();
    
            $new_project->title = $faker->sentence();
            $new_project->description = $faker->text(100);
            $new_project->name_client = $faker->words(2);
            $new_project->slug = Str::slug($new_project->title, '-');
    
            $new_project->save();
        }
    }
}
