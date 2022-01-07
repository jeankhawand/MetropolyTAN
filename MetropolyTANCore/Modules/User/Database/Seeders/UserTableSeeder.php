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
        $passenger->deposit(10);
        // Create Driver
        $driver = User::factory()->create([
            'name'=>"Driver",
            'email'=>"driver@example.com"
        ]);
        $wallet = $driver->createWallet([
            'name' => 'Ticket Earned',
            'slug' => 'ticket-earned',
        ]);
        $wallet->deposit(10);
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
        // Create 5 passengers & Drivers
        User::factory(5)->create()->each(function ($passengersdrivers) {
            $ticketwallet = $passengersdrivers->createWallet([
                'name' => 'Ticket Earned',
                'slug' => 'ticket-earned',
            ]);
            $incomewallet = $passengersdrivers->createWallet([
                'name' => 'Income per KM/H',
                'slug' => 'payout-income',
            ]);
            $ticketwallet->deposit(20);
            $incomewallet->deposit(550.30);
            $passengersdrivers->assignRole(RoleVar::PASSENGER);
            $passengersdrivers->assignRole(RoleVar::DRIVER);
        });
    }
}
