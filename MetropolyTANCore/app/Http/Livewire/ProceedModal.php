<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class ProceedModal extends ModalComponent
{
    public $response = false;
    public $random;
    public function mount(){
        $this->random = (float)rand() / (float)getrandmax();
        if($this->random < 0.55)
            $this->response = true;
    }
    public function render()
    {
        return view('livewire.proceed-modal',['response'=>$this->response,'random'=>$this->random]);
    }
}
