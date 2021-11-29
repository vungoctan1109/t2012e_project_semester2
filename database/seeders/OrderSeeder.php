<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Anh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'userId'=> 1,
                'status'=>  1,
                'name'=>  'Nguyễn Văn Ánh',
                'comment'=>  'Hang Viet Nam chat luong cao',
                'address'=>  'Chùa Láng, Đống Đa, Hà Nội',
                'phone'=>  '0346578099',
                'email'=>  'hanoipho@gmail.com',
                'totalPrice'=>  44980000,
                'checkOut'=>  true,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
