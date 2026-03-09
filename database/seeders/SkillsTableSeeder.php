<?php

namespace Database\Seeders;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    public function run(): void
    {
        Skill::create([
            'skill' => 'HTML',
            'level' => 80
        ]);

        Skill::create([
            'skill' => 'CSS',
            'level' => 75
        ]);

        Skill::create([
            'skill' => 'JavaScript',
            'level' => 65
        ]);

        Skill::create([
            'skill' => 'PHP',
            'level' => 70
        ]);

        Skill::create([
            'skill' => 'Laravel',
            'level' => 65
        ]);

        Skill::create([
            'skill' => 'MySQL',
            'level' => 60
        ]);

        Skill::create([
            'skill' => 'Git',
            'level' => 55
        ]);

        Skill::create([
            'skill' => 'Unity / C#',
            'level' => 60
        ]);
    }
}