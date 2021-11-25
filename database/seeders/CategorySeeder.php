<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=> 1,
                'name'=>'mobile',
                'description'=>'A mobile phone, cellular phone, cell phone, cellphone, handphone, or hand phone, sometimes shortened to simply mobile, cell or just phone, is a portable telephone that can make and receive calls over a radio frequency link while the user is moving within a telephone service area. The radio frequency link establishes a connection to the switching systems of a mobile phone operator, which provides access to the public switched telephone network (PSTN).',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 2,
                'name'=>'laptop',
                'description'=>'A laptop, laptop computer, or notebook computer is a small, portable personal computer (PC) with a screen and alphanumeric keyboard. These typically have a clam shell form factor, typically having the screen mounted on the inside of the upper lid and the keyboard on the inside of the lower lid, although 2-in-1 PCs with a detachable keyboard are often marketed as laptops or as having a laptop mode.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 3,
                'name'=>'accessory 1',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 4,
                'name'=>'accessory 2',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 5,
                'name'=>'accessory 3',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 6,
                'name'=>'accessory 4',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 7,
                'name'=>'accessory 5',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 8,
                'name'=>'accessory 6',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 9,
                'name'=>'accessory 7',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 10,
                'name'=>'accessory 8',
                'description'=>'Accessories include any hardware that is not integral to the operation of a mobile smartphone as designed by the manufacturer.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]

        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
