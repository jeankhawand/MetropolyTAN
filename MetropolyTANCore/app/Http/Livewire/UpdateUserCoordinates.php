<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Modules\User\Entities\User;
use Modules\User\Events\UserCoordinates;

class UpdateUserCoordinates extends Component
{
    protected $listeners = ['updateUserCoordinates' => 'updateUserCoordiantes'];
    public function updateUserCoordiantes($location_data, User $user)
    {
        $data = json_decode($location_data);
        $user->location->setLat($data->latitude);
        $user->location->setLng($data->longitude);
        $user->save();
        $location = array();
        $location['lat'] = $data->latitude;
        $location['long'] = $data->longitude;
        event(new UserCoordinates($user,$location));
    }
    public function render()
    {
        return view('livewire.update-user-coordinates');
    }
}
