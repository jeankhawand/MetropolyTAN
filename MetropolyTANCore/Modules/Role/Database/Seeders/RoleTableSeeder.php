<?php

namespace Modules\Role\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Models\Permission;
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
        /////////////////////////////////////////////////////////////////
        /// Roles
        /////////////////////////////////////////////////////////////////
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleOperator = Role::create(['name' => 'operator']);
        $roleTeleOperator = Role::create(['name' => 'teleoperator']);
        $roleDriver = Role::create(['name' => 'driver']);
        $rolePassenger = Role::create(['name' => 'passenger']);
        /////////////////////////////////////////////////////////////////
        /// Permission
        /////////////////////////////////////////////////////////////////
        $permissionCreateUser = Permission::create(['name' => 'user:create']);
        $permissionReadUser = Permission::create(['name' => 'user:read']);
        $permissionUpdateUser = Permission::create(['name' => 'user:update']);
        $permissionDeleteUser = Permission::create(['name' => 'user:delete']);
        /////////////////////////////////////////////////////////////////
        /// TeleOperator Permission
        /////////////////////////////////////////////////////////////////
        $permissionUpdateUser->assignRole($roleTeleOperator);
        $permissionReadUser->assignRole($roleTeleOperator);
        /////////////////////////////////////////////////////////////////
        /// Admin Permission
        /////////////////////////////////////////////////////////////////
        $permissionCreateUser->assignRole($roleAdmin);
        $permissionReadUser->assignRole($roleAdmin);
        $permissionUpdateUser->assignRole($roleAdmin);
        $permissionDeleteUser->assignRole($roleAdmin);
    }
}
