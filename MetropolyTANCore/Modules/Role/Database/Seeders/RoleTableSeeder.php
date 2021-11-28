<?php

namespace Modules\Role\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Role\Entities\PermissionVar;
use Modules\Role\Entities\RoleVar;
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
        $roleApto = Role::create(['name' => RoleVar::AUTHORITATIVEPUBLICTRANSPORTATIONORGANIZER]);
        /////////////////////////////////////////////////////////////////
        /// Permissions
        /////////////////////////////////////////////////////////////////
        $userPermission = Permission::create(['name' => PermissionVar::USER.".*"]);
        $rolePermission = Permission::create(['name' => PermissionVar::ROLE.".*"]);
        /////////////////////////////////////////////////////////////////
        /// Teleoperator Permissions
        /////////////////////////////////////////////////////////////////
        $teleoperatorPermission = Permission::create(['name' => PermissionVar::USER.'.create,update,read']);
        $roleTeleOperator->givePermissionTo($teleoperatorPermission);
    }
}
