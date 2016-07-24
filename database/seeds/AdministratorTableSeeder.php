<?php

use Illuminate\Database\Seeder;

class AdministratorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('administrator')->truncate();
        DB::table('administrator')->insert([
            'name' => env('ADMIN_NAME'),
            'password' => bcrypt(env('ADMIN_PW')),
        ]);
    }
}
