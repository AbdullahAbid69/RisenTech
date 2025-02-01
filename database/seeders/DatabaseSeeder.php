<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\course;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        admin::create([
            'adminname' => 'Admin',
            'adminemail' => 'admin@gmail.com',
            'adminpassword' => Hash::make('12345678'),
        ]);
        
        // Multiple courses ko insert karna
        Course::create([
            'course_name' => 'BS Medical Laboratory Technology',
            'course_code' => 'ML101',
            'description' => 'Empty',
        ]);

        Course::create([
            'course_name' => 'BS Nursing',
            'course_code' => 'NU101',
            'description' => 'Empty',
        ]);

        Course::create([
            'course_name' => 'Doctor of physical therapy',
            'course_code' => 'PHT101',
            'description' => 'Empty',
        ]);

        Course::create([
            'course_name' => 'BS Diet & Nutrition',
            'course_code' => 'DN101',
            'description' => 'Empty',
        ]);

    }
}