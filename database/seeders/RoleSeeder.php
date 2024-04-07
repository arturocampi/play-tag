<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon as Date;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'admin',
            'created_at' => Date::now()
        ]);

        DB::table('roles')->insert([   
            'id' => 2,
            'name' => 'catcher',
            'created_at' => Date::now()
        ]);
        
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'runner',
            'created_at' => Date::now()
        ]);
    }
}
