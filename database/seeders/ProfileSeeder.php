<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
        'name' => 'Samuel Apua',
        'title' => 'Game Developer',
        'bio' => 'Currently pursuing my Bachelor\'s Degree in Computer Science at the University of St. La Salle, I am passionate about coding, problem-solving, and creating innovative projects. I enjoy learning new technologies, developing web and software applications, and improving my programming skills through practical experience.
.'
    ]); 
    }
}
