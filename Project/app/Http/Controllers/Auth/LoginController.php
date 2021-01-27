<?php

namespace App\Http\Controllers\Auth;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class LoginController extends Controller
{

   use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/dep";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirecTo()
    {
        return "/dep";
    }
    public function showLoginForm(){
        return view('auth.login');
    }
    public function login(Request $request){
       //return $request;
        if(Auth::attempt(['Username' => $request->username, 'Password' => $request->password,true])){
            return redirect('/dep');
        }
    }
    protected function guard(){
        return Auth::guard('employee');
    }
}
