<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use Modules\Role\Entities\RoleVar;

class ChooseAdding extends ModalComponent
{
    // public $status = 0;
    // public function mount()
    // {
    //     if(auth()->user()->hasExactRoles([RoleVar::PASSENGER,RoleVar::DRIVER])) {
    //         $this->status = 1;
    //     }elseif(auth()->user()->hasRole(RoleVar::DRIVER)){
    //         $this->status = 2;
    //     }elseif(auth()->user()->hasRole(RoleVar::PASSENGER)){
    //         $this->status = 3;
    //     }   
    // }
    public function render()
    {
        return view('livewire.choose-adding');//,['status'=>$this->status]
    }
    public static function modalMaxWidth(): string
    {
        return 'sm';
    }
}
