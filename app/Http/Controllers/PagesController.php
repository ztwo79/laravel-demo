<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function about(){
        $name = "wei-ming";

//        return view('pages.about')->with('name' , $name);
        $first = "john";
        $last = "no";
        return view('pages.about' , compact("first" , "last" ));
	}

}
