<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use Modules\User\Entities\User;
use Modules\User\Events\UserCoordinates;

class UserDetails extends ModalComponent
{
    public $user;
    public function mount($user)
    {
        $this->user = User::findOrFail($user);
    }
    public function render()
    {
        return view('livewire.user-details');
    }
    public static function modalMaxWidth(): string
    {
        return '5xl';
    }
}
