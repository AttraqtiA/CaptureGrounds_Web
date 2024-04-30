<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role_name'=>'Admin'
        ]);
        DB::table('roles')->insert([
            'role_name'=>'freelancer'
        ]);
        DB::table('roles')->insert([
            'role_name'=>'User'
        ]);
    }
}
