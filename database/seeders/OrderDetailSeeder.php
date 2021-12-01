<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Order_details');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderID' => 1,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addMonth(-3),
                'updated_at' => Carbon::now()->addMonth(-3)
            ],[
                'orderID' => 1,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addMonth(-3),
                'updated_at' => Carbon::now()->addMonth(-3)
            ],[
                'orderID' => 2,
                'mobileID' => $faker->numberBetween(1, 18),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-84),
                'updated_at' => Carbon::now()->addDay(-84),
            ],[
                'orderID' => 2,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-84),
                'updated_at' => Carbon::now()->addDay(-84)
            ],[
                'orderID' => 3,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-81),
                'updated_at' => Carbon::now()->addDay(-81)
            ],[
                'orderID' => 3,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-81),
                'updated_at' => Carbon::now()->addDay(-81)
            ],[
                'orderID' => 4,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-78),
                'updated_at' => Carbon::now()->addDay(-78)
            ],[
                'orderID' => 4,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-78),
                'updated_at' => Carbon::now()->addDay(-78)
            ],[
                'orderID' => 5,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-75),
                'updated_at' => Carbon::now()->addDay(-75)
            ],[
                'orderID' => 5,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-75),
                'updated_at' => Carbon::now()->addDay(-75)
            ],[
                'orderID' => 6,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-72),
                'updated_at' => Carbon::now()->addDay(-72)
            ],[
                'orderID' => 6,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-72),
                'updated_at' => Carbon::now()->addDay(-72)
            ],[
                'orderID' => 7,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-69),
                'updated_at' => Carbon::now()->addDay(-69)
            ],[
                'orderID' => 7,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-69),
                'updated_at' => Carbon::now()->addDay(-69)
            ],[
                'orderID' => 8,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-66),
                'updated_at' => Carbon::now()->addDay(-66)
            ],[
                'orderID' => 8,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-66),
                'updated_at' => Carbon::now()->addDay(-66)
            ],[
                'orderID' => 9,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-63),
                'updated_at' => Carbon::now()->addDay(-63)
            ],[
                'orderID' => 9,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-63),
                'updated_at' => Carbon::now()->addDay(-63)
            ],[
                'orderID' => 4,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-60),
                'updated_at' => Carbon::now()->addDay(-60)
            ],[
                'orderID' => 10,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-60),
                'updated_at' => Carbon::now()->addDay(-60)
            ],[
                'orderID' => 11,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-57),
                'updated_at' => Carbon::now()->addDay(-57)
            ],[
                'orderID' => 11,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-57),
                'updated_at' => Carbon::now()->addDay(-57)
            ],[
                'orderID' => 12,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-54),
                'updated_at' => Carbon::now()->addDay(-54)
            ],[
                'orderID' => 12,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-54),
                'updated_at' => Carbon::now()->addDay(-54)
            ],[
                'orderID' => 13,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-51),
                'updated_at' => Carbon::now()->addDay(-51)
            ],[
                'orderID' => 13,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-51),
                'updated_at' => Carbon::now()->addDay(-51)
            ],[
                'orderID' => 14,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-48),
                'updated_at' => Carbon::now()->addDay(-48)
            ],[
                'orderID' => 14,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-48),
                'updated_at' => Carbon::now()->addDay(-48)
            ],[
                'orderID' => 15,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-45),
                'updated_at' => Carbon::now()->addDay(-45)
            ],[
                'orderID' => 15,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-45),
                'updated_at' => Carbon::now()->addDay(-45)
            ],[
                'orderID' => 16,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-42),
                'updated_at' => Carbon::now()->addDay(-42)
            ],[
                'orderID' => 16,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-42),
                'updated_at' => Carbon::now()->addDay(-42)
            ],[
                'orderID' => 17,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-39),
                'updated_at' => Carbon::now()->addDay(-39)
            ],[
                'orderID' => 17,
                'mobileID' => $faker->numberBetween(1, 26),
                'quantity' => 1,
                'unitPrice' => $faker->numberBetween(1, 10) * 5000000,
                'discount' => $faker->numberBetween(1, 3) * 0.1,
                'created_at' => Carbon::now()->addDay(-39),
                'updated_at' => Carbon::now()->addDay(-39)
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
