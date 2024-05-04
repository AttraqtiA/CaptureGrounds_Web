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
        Role::create([
            'role_name' => 'Admin',
        ]);

        Role::create([
            'role_name' => 'Worker',
        ]);

        Role::create([
            'role_name' => 'Customer',
        ]);
    }
}
