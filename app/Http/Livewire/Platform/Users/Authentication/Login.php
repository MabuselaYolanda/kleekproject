<?php

namespace App\Http\Livewire\Platform\Users\Authentication;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $cellphone;
    public $password;

    public function login(User $user){
        $this->validate([
            'cellphone' => 'required|min:10|max:10',
            'password' => 'required|min:7|max:15'
        ]);

        if(!Auth::attempt(['cellphone' => $this->cellphone, 'password' => $this->password])){
            if(!$user::where('cellphone', $this->cellphone)->first()){
                session()->flash('error', 'Hi, it appears you currently do not have an account registered with us');
            }else{
                session()->flash('error', 'Hi, please check the details you have submitted as they produced an error when trying to authenticate you');
            }
        } else {
            return redirect(route('dashboard'));
        }

    }
    public function render()
    {
        return view('livewire.platform.users.authentication.login');
    }
}
