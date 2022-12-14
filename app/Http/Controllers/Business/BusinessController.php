<?php

namespace App\Http\Controllers\Business;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Member;
use App\Models\User;
use App\Models\Business;
use App\Models\Event;




class BusinessController extends Controller
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
       $user = Auth::User();
       $mid = $user->member_mid;
       $member = Member::find($mid);

       $events = Event::all();
        // dd($member);
        return view ('business.dashboard',compact('member','events'));


    }

    public function profile(){
        //
    $user = Auth::User();
    $mid = $user->member_mid;
    $member = Member::find($mid);
    $member->load('business');

     // dd($member);
     return view ('business.profile',compact('member'));

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
