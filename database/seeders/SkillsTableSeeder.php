<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['skill'=>'HTML', 'level'=>'Advanced'],
            ['skill'=>'Java', 'level'=>'Intermediate'],
            ['skill'=>'C#', 'level'=>'Intermediate'],
            ['skill'=>'Laravel', 'level'=>'Beginner'],
        ]);
    }
}
