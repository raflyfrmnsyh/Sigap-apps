<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['role_name' => 'admin']);
        Role::create(['role_name' => 'petugas']);
        Role::create(['role_name' => 'masyarakat']);
    }
}
