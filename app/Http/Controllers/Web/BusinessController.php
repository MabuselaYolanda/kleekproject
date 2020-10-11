<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    //

    public function index($uuid){
        $business = Business::where('business', $uuid)->first();
        $profile = User::find(Auth::user()->user)->profile;

        if($business){
            return view('application.platform.dashboard.business.index')->with('business', $business)->with('profile', $profile);
        }else{
            return redirect(route('dashboard'));
        }
    }

    public function employee(){

    }


}
