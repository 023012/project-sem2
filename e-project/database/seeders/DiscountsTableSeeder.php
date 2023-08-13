<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $discounts = [
            ['Giảm 0%', 0, 1],
            ['Giảm 5%', 5, 1],
            ['Giảm 10%', 10, 1],
            ['Giảm 15%', 15, 1],
            ['Giảm 20%', 20, 1],
            ['Giảm 25%', 25, 1],
            ['Giảm 30%', 30, 1],
          ];
          foreach($discounts as $discount) {
              Discount::create([
                  'name' => $discount[0],
                  'discount_percent' => $discount[1],
                  'active' => $discount[2]
              ]);
          }
    }
}
