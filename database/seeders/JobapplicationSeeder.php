<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobapplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobapplications')->insert([
            [
                'jobapplicationtitle' => 'Software Engineer',
                'jobapplicationdescription' => 'Develop and maintain software solutions for clients.',
                'image' => 'images/a.jpg',
                'location' => 'Jakarta',
                'employmentstatus' => 'Full-time',
                'startperiod' => '2025-07-01',
                'endperiod' => '2025-12-31',
                'created_at' => now(),
                'updated_at' => now(),
                'slug' => Str::random(20)
            ],
            [
                'jobapplicationtitle' => 'Project Manager',
                'jobapplicationdescription' => 'Coordinate project timelines, resources, and teams.',
                'image' => 'images/b.png',
                'location' => 'Bandung',
                'employmentstatus' => 'Contract',
                'startperiod' => '2025-08-01',
                'endperiod' => '2026-01-31',
                'created_at' => now(),
                'updated_at' => now(),
                'slug' => Str::random(20)
            ],
            [
                'jobapplicationtitle' => 'Graphic Designer',
                'jobapplicationdescription' => 'Create visual designs and marketing materials.',
                'image' => 'images/c.jpg',
                'location' => 'Surabaya',
                'employmentstatus' => 'Part-time',
                'startperiod' => '2025-09-01',
                'endperiod' => '2026-03-31',
                'created_at' => now(),
                'updated_at' => now(),
                'slug' => Str::random(20)
            ],
        ]);
    }
}
