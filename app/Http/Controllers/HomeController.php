<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use insert_donor;
use DB;
use Validator, Input, Redirect;
use Schema;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
     /*public function donor_1(Request $request)
    { 
         $list= DB::table('donor_list')->get();
       return view('donnerside.donorside',['list'=>$list]);
        
    }*/
}
