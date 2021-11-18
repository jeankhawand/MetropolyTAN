<?php

namespace Modules\Role\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        // Create a set of roles
        // Roles name must be lower case
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleOperator = Role::create(['name' => 'operator']);
        $roleTeleOperator = Role::create(['name' => 'teleoperator']);
        $roleDriver = Role::create(['name' => 'driver']);
        $rolePassenger = Role::create(['name' => 'passenger']);
    }
}
