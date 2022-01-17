<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Modules\Role\Entities\RoleVar;

class ChooseModal extends Component
{
    public $status;
    protected $listeners = ['fireClick' => 'showAddModal'];
    public function showAddModal(){
        if(auth()->user()->hasExactRoles([RoleVar::PASSENGER,RoleVar::DRIVER])) {
            $this->status = 1;
        }elseif(auth()->user()->hasRole(RoleVar::DRIVER)){
            $this->status = 2;
        }elseif(auth()->user()->hasRole(RoleVar::PASSENGER)){
            $this->status = 3;
        }
    }
    public function render()
    {
        return view('livewire.choose-modal',['status'=>$this->status]);
    }
    public static function modalMaxWidth(): string
    {
        return '5xl';
    }
}
