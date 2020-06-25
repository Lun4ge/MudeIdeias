<?php

namespace App\Http\Controllers;

use App\Portfolios;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Identidade Visual'])->get();
        return view('home')->with(compact("all"));
    }
}
