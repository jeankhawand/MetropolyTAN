<?php
namespace Modules\User\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use MStaack\LaravelPostgis\Geometries\Point;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\User\Entities\User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->unique()->safeEmail,
            'birth_date'=> $this->faker->date(max: '1038992285'),
            'phone_number'=> $this->faker->randomNumber(9),
            'address'=>$this->faker->address,
            'device'=>$this->faker->macAddress,
            'email_verified_at'=> now(),
            'password'=> Hash::make('123'),
            'remember_token'=>Str::random(10),
            'location' => (new Point($this->faker->latitude(47.4,47.8), $this->faker->longitude(6.5,6.9)))->toWKT(),
        ];
    }
}

