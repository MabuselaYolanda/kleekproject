<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index(){
        return view('application.site.index');
    }

    public function about(){

    }

    public function contact(){

    }
}
