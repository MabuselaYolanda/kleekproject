<?php

namespace App\Http\Livewire\Platform\Users\Authentication;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $surname;
    public $cellphone;
    public $password;
    public $role;

    public function register(User $user){
        $this->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'cellphone' => 'required|min:10|max:10',
            'role' => 'required',
            'password' => 'required|min:7|max:15'
        ]);

        if($user::where('cellphone', $this->cellphone)->first()){
            session()->flash('error', 'Hi, it appears you already have an active account with us please navigate to this link  ' . route('login') . ' to login');
        } else {
            $user->user = md5(Str::random(32) . $this->cellphone . $this->password);
            $user->name = $this->name;
            $user->surname = $this->surname;
            $user->cellphone = $this->cellphone;
            $user->role = $this->role;
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('message', 'Hi, we have successfully registered your account please wait while we redirect you to the login page');
        }
    }

    public function render(){
        return view('livewire.platform.users.authentication.register');
    }
}
