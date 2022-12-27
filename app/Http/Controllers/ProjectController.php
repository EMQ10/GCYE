<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

use App\Models\Member;

use Auth;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $project = Project::all();
        $user = Auth::User();
        $mid = $user->member_mid;
        $member = Member::find($mid);
        $member->load('business');
        return view ('business.project',compact('project','member'));

    }

    public function details($id){
        $user = Auth::User();
        $mid = $user->member_mid;
        $member = Member::find($mid);
        $projects = Project::find($id);
        // dd($projects);
        foreach (Auth::user()->roles as $role)
        {
            if ($role->name == 'Admin'|| $role->name == 'Superdmin')
            {
                 return view('admin.projects_detail', compact('projects','member'));
            }
        }
        return view ('business.show',compact('projects','member'));

    }

    public function events(){
        $user = Auth::User();
        $mid = $user->member_mid;
        $member = Member::find($mid);
        $projects = Project::orderBy('id', 'desc')->get();
        // dd($projects);
        foreach (Auth::user()->roles as $role)
        {
            if ($role->name == 'Admin'|| $role->name == 'Superdmin')
            {
                 return view('admin.projects', compact('projects','member'));
            }
        }
        
        return view ('business.projects',compact('projects','member'));

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

    public function save(Request $request){

        $this->validate($request, [
            'title'=>'required',
            'description'=>'required',
            'description1'=>'required',
            'startdate'=>'required',
            'enddate'=>'required',
            'starttime'=>'required',
            'endtime'=>'required',
            'location'=>'required',
            'deadline'=>'required',
            'event_type'=>'required',
            'category'=>'required',
            'organiser'=>'required',
            'link_text'=>'required',
            'link'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',               
        ]);
        // $filename = time() . '.' . $request->image->extension();
        $filename = $request->file('image')->getClientOriginalName();
        // dd($filename);

        $request->image->move(public_path('projects'), $filename);
        
        $project = new Project ;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->description1 = $request->description1;
        $project->startdate = $request->startdate;
        $project->enddate = $request->enddate;
        $project->starttime = $request->starttime;
        $project->endtime = $request->endtime;
        $project->location = $request->location;
        $project->deadline = $request->deadline;
        $project->event_type = $request->event_type;
        $project->category = $request->category;
        $project->organiser = $request->organiser;
        $project->link_text = $request->link_text;
        $project->link = $request->link;



        $project->image = $filename;
        $project->save();
        return back()
        ->with('success','Event Created Successfuly');
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
        $projects = Project::find($id);

        return view ('admin.project_edit',compact('projects'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function updating(Request $request, $id){
        $input = $request->all();
        dd($input);
        return back()
        ->with('success','Event Created Successfuly');
    }

    public function save_event (Request $request, $id){
        $project = Project::find($id);

        $filename = $request->file('image')->getClientOriginalName();
        // dd($filename);

        $request->image->move(public_path('projects'), $filename);
        
        $project->title = $request->title;
        $project->description = $request->description;
        $project->description1 = $request->description1;
        $project->startdate = $request->startdate;
        $project->enddate = $request->enddate;
        $project->starttime = $request->starttime;
        $project->endtime = $request->endtime;
        $project->location = $request->location;
        $project->deadline = $request->deadline;
        $project->event_type = $request->event_type;
        $project->category = $request->category;
        $project->organiser = $request->organiser;
        $project->link_text = $request->link_text;
        $project->link = $request->link;

        $project->image = $filename;
        $project->update();

        return redirect()->route('project.detail',$id)
                                     ->with('success', 'Project Updated successfully.');
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
