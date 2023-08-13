<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['Nguyễn Thành Đạt', 'dat@gmail.com', bcrypt('12345678'), 'Hà Nội', '0912345646', '0'],
            ['Nguyễn Minh Tuấn', 'tuan@gmail.com', bcrypt('12345678'), 'Hà Nội', '0912345678', '0'],
            ['Nguyễn Trường Giang', 'giang@gmail.com', bcrypt('12345678'), 'Hà Nội', '0912345632', '0'],
            ['Đào Tuấn Anh', 'tuananh@gmail.com', bcrypt('12345678'), 'Hà Nội', '0964345632', '0'],
        ];

        foreach($users as $user) {
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => $user[2],
                'address' => $user[3],
                'phone' => $user[4],
                'role' => $user[5]
            ]);
        }
    }
}
