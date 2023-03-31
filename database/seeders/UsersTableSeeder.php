<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

            'name' => 'admin',

            'email' => 'admin@gmail.com',

            'password' => '$2y$10$Wuaee3QJAuB7rDxy9nXfieI62fsHGOAZn.hCM9Z9oOe2RWRmhikL6',

        ]);
    }
}
