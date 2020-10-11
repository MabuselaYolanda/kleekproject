<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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

        Business::create([
            'business' => Str::orderedUuid(),
            'user' => Auth::user()->user,
            'name' => $this->name,
            'type' => $this->type,
            'funded' => $this->established,
            'about' => $this->about
        ]);

        return redirect(route('dashboard'));

    }
    public function render()
    {
        return view('livewire.business');
    }
}
