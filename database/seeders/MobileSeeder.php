<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MobileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Mobiles');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('mobiles')->truncate();
        DB::table('mobiles')->insert([
            [
                'id' => 1,
                'name' => $faker->streetName,
                'categoryID ' => 1,
                'brandID ' => $faker->numberBetween(1, 8),
                'quantity' => $faker->numberBetween(1, 9) * 100,
                'status' => $faker->numberBetween(-1, 3),
                'saleOff' => $faker->numberBetween(1, 7) * 0.1,
                'price' => $faker->numberBetween(3, 20) * 1000000,
                'thumbnail' => 'https://res.cloudinary.com/quynv300192/image/upload/v1637650431/etvywgpmn5mkseimiiqe.jpg',
                'description' => $faker->paragraphs,
                'detail' => $faker->paragraphs,
                'color' => 'white',
                'ram' => 4,
                'memory' => 512,
                'pin' => $faker->numberBetween(1,3)*1000, //mAh
                'camera' => $faker->numberBetween(8,20),
                'screenSize' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
