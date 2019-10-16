<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'day_name' => 'Monday',
            'day_slug' => 'Monday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('days')->insert([
            'day_name' => 'Tuesday',
            'day_slug' => 'Tuesday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('days')->insert([
            'day_name' => 'Wednesday',
            'day_slug' => 'Wednesday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('days')->insert([
            'day_name' => 'Thursday',
            'day_slug' => 'Thursday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('days')->insert([
            'day_name' => 'Friday',
            'day_slug' => 'Friday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('days')->insert([
            'day_name' => 'Saturday',
            'day_slug' => 'Saturday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('days')->insert([
            'day_name' => 'Sunday',
            'day_slug' => 'Sunday',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
