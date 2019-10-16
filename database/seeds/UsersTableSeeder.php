<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'lawrence',
            'role_id' => '1',
            'email' => 'thutayarmoe97@gmail.com',
            'password' => bcrypt('lawrence'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
