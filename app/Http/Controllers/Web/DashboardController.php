<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index(){

        $profile = User::find(Auth::user()->user)->profile;
        $businesses = Business::where('user', Auth::user()->user)->get();
        return view('application.platform.dashboard.index')->with('profile', $profile);
    }
}
