<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use Modules\Role\Entities\RoleVar;

class ChooseAdding extends ModalComponent
{
    public function render()
    {
        return view('livewire.choose-adding');
    }
    public static function modalMaxWidth(): string
    {
        return 'sm';
    }
}
