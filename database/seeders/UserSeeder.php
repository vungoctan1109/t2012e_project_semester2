<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id'=> 1,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>'Nguyen Van Quy',
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 2,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 3,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 4,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 5,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 6,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 7,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 8,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 9,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 10,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 11,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 12,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 13,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 14,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 15,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 16,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 17,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 18,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 19,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 20,
                'email'=>$faker->email,
                'password_hash'=>'$2y$10$QEbJvoH8w79vnSMQsyRXNuynBtxuHsUVXLyEdR3Zeg10YTvy07cuK',
                'fullName'=>$faker->firstName,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'avatar'=>'https://res.cloudinary.com/binht2012e/image/upload/v1638387232/xv0w6vr4foru8sauxswz.webp,',
                'role'=>$faker->numberBetween(0,1),
                'status'=>$faker->numberBetween(0,1),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
