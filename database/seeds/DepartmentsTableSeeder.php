<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'department_name' => 'Eye',
            'department_slug' => 'Eye'
        ]);
        DB::table('departments')->insert([
            'department_name' => 'Ear',
            'department_slug' => 'Ear'
        ]);
        DB::table('departments')->insert([
            'department_name' => 'Nose',
            'department_slug' => 'Nose'
        ]);
    }
}
