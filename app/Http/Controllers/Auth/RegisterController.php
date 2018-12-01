<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

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
//protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'gender' => ['required', 'string', 'min:1'],
            'isAdmin' => ['required', 'int', 'min:0|max:1'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'isAdmin' => $data['isAdmin'],
        ]);
    }

    protected function authenticated($request,$user){

        if(auth::user()->isAdmin == 1){     /* if authenticated user is an admin */ 
            return redirect('/admin-dashboard');  //redirect to admin panel
        }
    
        return redirect('/home'); //redirect to standard user homepage
    
    }

    protected function verifyInputAdminSubmission($request){
           // $modeluser = new User;
 

        // if ($request->isAdmin == 1)
        // {
        //     $modeluser->isAdmin = $request->isAdmin;
        //     $modeluser->save();
        //     return redirect('/admin-dashboard');
        // }
        // else {
        //     $modeluser->isAdmin = "";
        //     $modeluser->save();
        //     return redirect('/home');
        // }

    //      User->save();
    //  return redirect('/home');
    }
    
}
