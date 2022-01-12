<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class keypediacontro extends Controller
{
    //
      /**
     * Create a new controller instance.
     *
     * @return void
     */

 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('homepage');
    }



    public function keypedialogin(Request $request){
        $user= User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "Email or password is not matched";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
        return $request->input();
    }






   

    public function save(Request $request){
        
        //Validate requests
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:3|confirmed',
            'address' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'dateofbirth' => 'required|date',

        ]);

         //Insert data into database
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->address = $request->address;
         $user->gender = $request->gender;
         $user->dateofbirth = $request->dateofbirth;
         $save =  $user->save();
        



         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }


    

}
