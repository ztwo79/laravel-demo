<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RwdController extends Controller {


    public function rwd(){
        $first = "john";
        $last = "no";
        return view('pages.Rwd' , compact("first" , "last" ));
    }
}
