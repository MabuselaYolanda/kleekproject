<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Online extends Component
{
    public $online;

    public function mount(){
        $this->online = Rand(100, 50000);
    }
    public function render()
    {
        return view('livewire.online')->with('online', $this->online);
    }
}
