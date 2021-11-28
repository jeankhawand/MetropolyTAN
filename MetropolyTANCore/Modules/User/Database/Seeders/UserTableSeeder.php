<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $admin = new User;
        $admin->name = 'Jean Khawand';
        $admin->address = 'Achrafiyyeh, Sioufi';
        $admin->email = 'jeankhawand@gmail.com';
        $admin->password = Hash::make('123');
        $admin->assignRole('admin');
        $admin->save();

        // Create 5 employees
        User::factory(5)->create()->each(function ($passenger) {
            $passenger->assignRole('passenger');
        });
    }
}
