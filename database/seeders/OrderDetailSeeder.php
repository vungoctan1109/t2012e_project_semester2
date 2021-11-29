<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderID'=> 1,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 1,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 2,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 2,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 3,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 3,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 4,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 4,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 5,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 5,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 6,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 6,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 7,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 7,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 8,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 8,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 9,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 9,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 10,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 10,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 11,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 11,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 12,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 12,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 13,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 13,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 14,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 14,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 15,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 15,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 16,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 16,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 17,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 17,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 18,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 18,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 19,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 19,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 20,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 20,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 21,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 21,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 22,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 22,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 23,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 23,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 24,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 24,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 25,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 25,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 26,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 26,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 27,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 27,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 28,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 28,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 29,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 29,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'orderID'=> 30,
                'mobileID'=>  1,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'orderID'=> 30,
                'mobileID'=>  2,
                'quantity'=>  1,
                'unitPrice'=>  22490000,
                'discount'=>  0.25,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
