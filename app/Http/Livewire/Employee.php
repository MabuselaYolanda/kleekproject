<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Employee extends Component
{
    public $users;

    public function mount(){
        $this->users = User::where('role', 'Potential')->get();
    }

    public function render()
    {
        return view('livewire.employee')->with('users', $this->users);
    }
}
