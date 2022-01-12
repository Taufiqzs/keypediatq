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



  


    

}
