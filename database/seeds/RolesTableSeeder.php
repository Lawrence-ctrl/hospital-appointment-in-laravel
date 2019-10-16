<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'Admin',
            'role_slug' => 'Admin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('roles')->insert([
            'role_name' => 'Doctor',
            'role_slug' => 'Doctor',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
