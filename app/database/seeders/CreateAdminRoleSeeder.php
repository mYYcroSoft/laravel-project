<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateAdminRoleSeeder extends Seeder
{
    /**
     * Spusťte seeder.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrátor']);
    }
}
