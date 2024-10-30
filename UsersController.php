<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function register( Request $request){
        $data = $request->validate([//first validating the form fields
            'name' => 'required|string',
            'email' => 'required|string|email',
            'role' => 'required|string',
            'age' => 'required|numeric',
            'password' => 'required|confirmed',//confirmed checks if the password and confirm password are same or not, but for this you have to password_confirmation in the name of confirm password field
        ]);

        $credentials =  User::create($data);//creating data in the database table

        if($credentials){
            return redirect()->route('login');
        }
        else{
            return redirect()->route('registerSave');
        }
    }

    public function login(Request $request){

           $data = $request->validate([//validating login form data
            'email' => 'required|string|email',
            'password' => 'required',
         ]);

         //to use auth methods it is necessary to import its class//

        if(Auth::attempt($data)){//checks if the above fields data exists in the database table or not 
            return redirect()->route('index');
        }    
        else{
            return redirect()->route('register');
        }

    }

    public function index(){
        
         return view('index');
     

    }     
    
    public function inner(){

         return view('inner');
     

    } 

    public function logout(){
        Auth::logout();//destroys the sessions
        return redirect()->route('login');
    }

}
