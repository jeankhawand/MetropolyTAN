<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Role\Entities\RoleVar;
use Modules\User\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin
        $admin = User::factory()->create([
            'name'=>"Admin",
            'email'=>"admin@example.com"
        ]);
        $admin->assignRole(RoleVar::ADMIN);

        // Create Passenger
        $passenger = User::factory()->create([
            'name'=>"Passenger",
            'email'=>"passenger@example.com"
        ]);
        $passenger->assignRole(RoleVar::PASSENGER);
        // Create Driver
        $driver = User::factory()->create([
            'name'=>"Driver",
            'email'=>"driver@example.com"
        ]);
        $driver->assignRole(RoleVar::DRIVER);
        // Create Teleoperator
        $teleoperator = User::factory()->create([
            'name'=>"Teleoperator",
            'email'=>"teleoperator@example.com"
        ]);
        $teleoperator->assignRole(RoleVar::TELEOPERATOR);
        // Create Operator
        $operator = User::factory()->create([
            'name'=>"Operator",
            'email'=>"operator@example.com"
        ]);
        $operator->assignRole(RoleVar::OPERATOR);
        // Create AUTHORITATIVE PUBLIC TRANSPORTATION ORGANIZER
        $apto = User::factory()->create([
            'name'=>"APTO",
            'email'=>"apto@example.com"
        ]);
        $apto->assignRole(RoleVar::AUTHORITATIVEPUBLICTRANSPORTATIONORGANIZER);

    }
}
