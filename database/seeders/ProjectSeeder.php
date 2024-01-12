<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $projects = config("db.projects");
        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->title = $project["title"];
            $new_project->user_id = 1;
            $new_project->slug = Str::slug($project["title"], '-');
            $new_project->image = $project["image"];
            $new_project->body = $project["body"];

            $new_project->save();

        }

    }
}
