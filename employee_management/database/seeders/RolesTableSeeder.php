<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            'role' => 'Employer',
            'id' => 1,
            
        ]);
        DB::table('roles')->insert([
            'role' => 'Employee',
            'id' => 2,
            
        ]);
    }
}
