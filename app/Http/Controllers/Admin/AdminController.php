<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\User;
use App\Models\Member;
Use Auth;
use App\Models\Project;

use App\Models\Ticket;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::all();
        // $numb = array($members->phone);

        // foreach($members as $number){

        //     $numb = array($number->phone);
        //    dd($numb);
        //    $doctor_result = Doctor::all()->toArray();

        // }

        $result = DB::table('members')->get('phone');
        $resultArray = $result->toArray();
        // dd($resultArray);

        $tickets = Ticket::orderBy('id', 'desc')->paginate(3);

        $businesscount = member::Where('membership_type','Business')->count();
        $usercount = User::get()->count();
        $startercount = member::Where('membership_type','Starter')->count();
        // $businesscount = member::Where('membership_type','Business')->count();
        $projects = Project::orderBy('id', 'desc')->paginate(3);

            // dd($businesscount);
        return view ('admin.dashboard',compact('members','businesscount','usercount','startercount','projects','tickets'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
