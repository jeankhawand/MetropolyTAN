<?php

namespace Modules\Role\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Role\Entities\RoleVar;
use Modules\Role\Entities\UserPermission;
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
        $roleAdmin = Role::create(['name' => RoleVar::ADMIN]);
        $roleOperator = Role::create(['name' => RoleVar::OPERATOR]);
        $roleTeleOperator = Role::create(['name' => RoleVar::TELEOPERATOR]);
        $roleDriver = Role::create(['name' => RoleVar::DRIVER]);
        $rolePassenger = Role::create(['name' => RoleVar::PASSENGER]);
        /////////////////////////////////////////////////////////////////
        /// Permission
        /////////////////////////////////////////////////////////////////
        $permissionCreateUser = Permission::create(['name' => UserPermission::create]);
        $permissionReadUser = Permission::create(['name' => UserPermission::read]);
        $permissionUpdateUser = Permission::create(['name' => UserPermission::update]);
        $permissionDeleteUser = Permission::create(['name' => UserPermission::delete]);
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
