<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class UserDetails extends ModalComponent
{
    public function render()
    {
        return view('livewire.user-details');
    }
}
