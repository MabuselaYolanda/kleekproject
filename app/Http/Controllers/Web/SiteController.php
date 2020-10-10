<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\Contactable;
class SiteController extends Controller
{
    use Contactable;
    //

    public function index(){
        return view('application.site.index');
    }

    public function about(){

    }

    public function contact(){

    }
}
