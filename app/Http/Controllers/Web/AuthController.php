<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    /**
     * AuthController constructor.
     */
    public function __construct(){
        //this middleware ensures only a logged in user can enrol a profile linked to a user
        $this->middleware(['auth'])->only('profile');

        //this middleware ensures only a guest user can view the pages Login | Register
        $this->middleware(['guest'])->only(['login', 'register']);
    }


    /**
     * Returns a login page
     * @return Application|Factory|View
     */
    public function login(){
        return view('application.user.authentication.login');
    }

    /**
     * Returns a registration page
     * @return Application|Factory|View
     */
    public function register(){
        return view('application.user.authentication.register');
    }

    /**
     * Returns a profile page
     * @return Application|Factory|View
     */
    public function profile(){
        return view('application.user.authentication.profile');
    }
}
