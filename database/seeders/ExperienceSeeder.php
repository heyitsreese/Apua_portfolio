<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'company' => 'College of Computing Studies Student Council',
            'position' => 'Vice-Governor',
            'duration' => '2025 - Present',
            'description' => 'Assist the Governor in overseeing council initiatives and student programs. Help organize leadership activities, academic events, and represent student concerns to faculty and administration.',
        ]);

        Experience::create([
            'company' => 'Google Developer Groups Bacolod',
            'position' => 'Production Volunteer',
            'duration' => '2025 - Present',
            'description' => 'Provided on-site coordination and technical support during developer community events. Assisted in organizing and executing DevFest 2025, ensuring smooth event operations.',
        ]);

        Experience::create([
            'company' => 'USLS College of Engineering and Computing Studies Council',
            'position' => '2nd Year Level Representative',
            'duration' => '2024 - 2025',
            'description' => 'Represented the concerns of second-year students and coordinated with council leaders to support academic initiatives and student engagement activities.',
        ]);

        Experience::create([
            'company' => 'University of St. La Salle',
            'position' => 'Computer Science Student',
            'duration' => '2023 - Present',
            'description' => 'Pursuing a Bachelor of Science in Computer Science with a focus on software development, web technologies, and game development using modern programming tools.',
        ]);
    }
}