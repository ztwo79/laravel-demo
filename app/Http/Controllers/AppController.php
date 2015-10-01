<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppController extends Controller {

    /**
     * 首頁
     *
     * @return Response
     */
    public function index()
    {
        return view('app');
    }

}
