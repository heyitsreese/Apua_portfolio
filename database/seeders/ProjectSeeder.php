<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\ProjectImage;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::create([
            'title' => 'BudgetBuddy',
            'description' => 'BudgetBuddy is a simple and student-friendly personal finance tracking app designed to help you manage your money smarter.',
            'technologies' => 'None'
        ]);

        ProjectImage::create([
            'project_id' => $project->id,
            'image' => 'budgetbuddy.png'
        ]);

        ProjectImage::create([
            'project_id' => $project->id,
            'image' => 'BudgetBuddy2.png'
        ]);

        ProjectImage::create([
            'project_id' => $project->id,
            'image' => 'BudgetBuddy3.png'
        ]);

        $mystic = Project::create([
            'title' => 'Mystic Woods',
            'description' => 'Mystic Woods is a 3D horror adventure game prototype built in Unity featuring shadow-based movement mechanics and atmospheric exploration.',
            'technologies' => 'Unity, C#'
        ]);

        ProjectImage::create([
            'project_id' => $mystic->id,
            'image' => 'Mystic.png',
        ]);

        ProjectImage::create([
            'project_id' => $mystic->id,
            'image' => 'Mystic1.png',
        ]);

        ProjectImage::create([
            'project_id' => $mystic->id,
            'image' => 'Mystic2.png',
        ]);
    }
}
