<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('brands')->truncate();
        DB::table('brands')->insert([
            [
                'id'=> 1,
                'name'=>'Apple',
                'description'=>'Apple Inc. is an American multinational technology company that specializes in consumer electronics, computer software and online services. Apple is the largest information technology company by revenue and, since January 2021, the worlds most valuable company.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 2,
                'name'=>'Samsung',
                'description'=>'Samsung Electronics Co., Ltd. is a South Korean multinational electronics corporation headquartered in the Yeongtong District of Suwon. It is the pinnacle of the Samsung chaebol, accounting for 70% of the groups revenue in 2012.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 3,
                'name'=>'Xiaomi',
                'description'=>'Xiaomi Corporation, registered in Asia as Xiaomi Inc., is a Chinese designer and manufacturer of consumer electronics and related software, home appliances, and household items. Behind Samsung, it is the second largest manufacturer of smartphones, all of which run the MIUI operating system, a fork of Android. ',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=> 4,
                'name'=>'Nokia',
                'description'=>'Nokia Corporation is a Finnish multinational telecommunications, information technology, and consumer electronics company, founded in 1865. Nokias main headquarters are in Espoo, Finland, in the greater Helsinki metropolitan area, but the companys actual roots are in the Tampere region of Pirkanmaa.',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
