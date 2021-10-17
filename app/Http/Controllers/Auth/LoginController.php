<?php

namespace App\Http\Controllers\Auth;
use DB;
use App\Http\Controllers\Api\Auth\ApiBasecontroller as ApiBasecontroller;
use Auth;
use Validator, Input, Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\AdminModel;
use Schema;

class LoginController extends ApiBasecontroller
{
  

    protected $redirectTo = '/home';
   public function showLoginForm()
      {
      return view('donnerside.Adminlogin');
     }


  public function login1(Request $request){

         $email=$request->email;

        $password=$request->password;

        $users = DB::table('admin')->where([

            ['email', '=', $email],

            ['password', '=', $password],

                ])->get();
         
          return redirect($this->redirectTo);

        return $this->sendResponse($post->toArray(), 'Post created successfully.');
           

            }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
