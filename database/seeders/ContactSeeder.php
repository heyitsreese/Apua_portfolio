<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
        'email' => 'saprivatepua@gmail.com',
        'github' => 'https://github.com/heyitsreese',
        'phone' => '09668307133',
        'linkedin' => 'https://www.linkedin.com/in/samuel-apua/',
        'location' => 'Bacolod City, Negros Occidental'
    ]); 
    }
}
