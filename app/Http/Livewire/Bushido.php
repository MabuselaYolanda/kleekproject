<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Business;

class Bushido extends Component
{
    public $name;
    public $type;
    public $established;
    public $about;



    public function enrol(){
        $this->validate([
            'name' => 'required',
            'type' => 'required',
            'established' => 'required',
            'about' => 'required'
        ]);
    }
    public function render()
    {
        return view('livewire.business');
    }
}
