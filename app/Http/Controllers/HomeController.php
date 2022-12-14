<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use App\Models\User;

use App\Models\Member;


use Carbon\Carbon;
use Cache;



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
        

        if(Auth::check()){

            if (auth::user()->hasRole('Admin')){

            return redirect()->route('admin');
            }
            elseif (auth::user()->hasRole('Superadmin')){

                return redirect()->route('superadmin');
            }

            elseif (auth::user()->hasRole('Starter')){
                return redirect()->route('starter');
            }
            elseif (auth::user()->hasRole('Business')){
                return redirect()->route('business');
            }

        }

        }

    }

