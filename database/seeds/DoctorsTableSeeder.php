<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'doctor_name' => 'Dr. Lance Smith',
            'degree' => 'M.B.,B.S, M.Med.Sc (Neu) Dip. Med.Sc (Medical Education)',
            'department_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('doctors')->insert([
            'doctor_name' => 'Dr. Wills',
            'degree' => 'M.B.,B.S, M.Med.Sc (Neu) Dip. Med.Sc',
            'department_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
