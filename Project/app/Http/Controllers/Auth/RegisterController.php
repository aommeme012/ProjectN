<?php

namespace App\Http\Controllers\Auth;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     *
     *
     */

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function test()
    {
            return Employee::create([
                'idemp' => "EMP0001",
                'Fname' => "อชิตพล",
                'Lname' => "พลานุวัฒน์",
                'Address' => "43/374 ลาดกระบัง14/1",
                'Tel'=> "0631587049",
                'Sex'=> "ชาย",
                'Username'=> "achitphon",
                'Password' => bcrypt("123456"),
                'Emp_Status' => "Enable",
                'Type'=> "0",
                'Dep_Id'=> "1",
        ]);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

            return Validator::make($data, [
                'Fname' => ['required', 'string', 'max:255'],
                'Lname' => ['required', 'string', 'max:255'],
                'Tel' => ['required', 'string', 'max:10'],
                'Username' => ['required', 'string', 'max:255', 'unique:Employee'],
                'Password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Employee::create([
            'Fname' => "ddd",
            'Lname' => "ABc",
            'Address' => "123/456",
            'Tel'=> "0123456789",
            'Sex'=> "ชาย",
            'Username'=> "wooq",
            'Password' => bcrypt("123456"),
            'Emp_Status' => "Enable",
            'Type'=> "0",
            'Dep_Id'=> "1",

        ]);
    }
}
