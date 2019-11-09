<?php

use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('holidays')->insert([
            ['holiday_date'=>'2019-11-03'],
            ['holiday_date'=>'2019-11-04'],
            ['holiday_date'=>'2019-11-23'],
            ['holiday_date'=>'2019-12-23'],
            ['holiday_date'=>'2020-01-01'],
            ['holiday_date'=>'2020-01-13'],
            ['holiday_date'=>'2020-02-11'],
            ['holiday_date'=>'2020-02-24'],
            ['holiday_date'=>'2020-03-20'],
            ['holiday_date'=>'2020-04-29'],
            ['holiday_date'=>'2020-05-04'],
            ['holiday_date'=>'2020-05-05'],
            ['holiday_date'=>'2020-05-06'],
            ['holiday_date'=>'2020-07-20'],
            ['holiday_date'=>'2020-08-11'],
            ['holiday_date'=>'2020-09-21'],
            ['holiday_date'=>'2020-09-22'],
            ['holiday_date'=>'2020-10-12'],
            ['holiday_date'=>'2020-11-03'],
            ['holiday_date'=>'2020-11-23'],
            ['holiday_date'=>'2020-12-23'],
        ]);
    }
}
