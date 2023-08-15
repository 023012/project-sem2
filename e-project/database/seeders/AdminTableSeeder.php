<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'address' => 'ha noi',
            'phone' => '012345678',
            'password' => bcrypt('admin123'),
        ]);
    }
}
