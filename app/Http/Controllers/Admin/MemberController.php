<?php

namespace App\Http\Controllers\Admin;

use Haruncpi\LaravelIdGenerator\IdGenerator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\WelcomeEmailNotification;
use App\Notifications\UserLoginDetails;
use App\Notifications\RegistrationPaymentConfirmation;

use DB;
use App\Models\User;
use App\Models\Member;
use App\Models\Business;

Use Auth;
use Validator;
use File;
use Response;
 
use Carbon\Carbon;

class MemberController extends Controller
{
    // use Notifiable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function reg_list()
    {
        //
        $members = Member::where('reg_fee','No')->orderBy('id', 'desc')->paginate(10);

        return view ('admin.reg_fee',compact('members'));
    }
 
    public function dues_list()
    {
        //
        $members = Member::where( 'reg_fee','Yes')
                            ->where( 'dues_fee' ,'No')
                            ->orderBy('id', 'desc')->paginate(10);

        return view ('admin.dues_fee',compact('members'));
    }
   
    public function members_list(){
        //
        $members = Member::where( 'dues_fee','Yes')
                            ->orderBy('id', 'desc')->paginate(10);

        return view ('admin.members',compact('members'));
    }

    public function payment()
    {
        $url = "https://sms.hubtel.com/v1/messages/send?clientsecret=cdrvhemg&clientid=hcxglphg&from=GCYE&to=233&content=GCYE+Welcome";

        // file_get_contents($url);

        return back()

        ->with('success','sms sent.');
    }

    public function members_business(){
        //
        $members = Member::where('dues_fee','Yes')
                            ->where( 'membership_type','Business')
                            ->orderBy('id', 'desc')->paginate(10);

        return view ('admin.business',compact('members'));
    }
    public function members_starter(){
        //
        $members = Member::where('dues_fee','Yes')
                            ->where('membership_type','Starter')
                            ->orderBy('id', 'desc')->paginate(10);

        return view ('admin.starter',compact('members'));
    }





    public function registration($q){

        $choice = $q;
        // dd($q);

        return view('auth.registration',compact('choice'));
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
    public function upload(Request $request, $mid) 
    {
        $member = Member::find($mid);

        if($request->image == null){
            return back()
            ->with('error','No Image Selected');
        }
        else{

            $filename = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $filename);
    
            $member->image = $filename;
            $member->update();
            return back()
                ->with('success','Image uploaded successfully.')
                ->with('image', $filename); 
        }

    }
    public function logo_upload(Request $request, $mid) 
    {
        $member = Member::find($mid);

        if($member->business == null){

            return back()
            ->with('error','Please Update Business Info Before Uploading Business Logo');
        }
        else{

            if($request->logo == null){
                return back()
                ->with('error','No Logo Selected');
            }
            else{
                $filename = time() . '.' . $request->logo->extension();
    
                $request->logo->move(public_path('logos'), $filename);
        
                $member->business->logo = $filename;
                // $business->logo = $filename;
                $member->business->update();
                return back()
                    ->with('success','Image uploaded successfully.')
                    ->with('image', $filename); 
            }
            
        }
        // dd($a);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestt
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request, [
                'name' => 'required',
                'dob' => 'required',
                'position' => 'required',
                'email' => 'required | unique:members',
                'phone' => 'required | unique:members',
               
            ]);

        $member = new Member;

        $member->name = $request->name;
        $member->gender = $request->gender;
        $member->dob = $request->dob;
        $member->position = $request->positon;
        $member->email = $request->email;
        $member->phone = $request->phone;

        $member->membership_type = $request->type;
        $member->region = $request->region;

        $prefix = 'GCYE';
        $date = Carbon::now()->format('Y');
        $yes  = substr($date, -2);
        $type = $request->type;

        if($type == 'Starter')

            $m_type = 'ST';
        
        else
            $m_type = 'BS';

        $id = $prefix.$yes.$m_type;

              $schema =[
                'table' => 'members',
                'length' => 12,
                'prefix' => $id,
                'field' => 'mid',
                'reset_on_prefix_change' => true,
            ];
            $code = IdGenerator::generate($schema);

        $member->mid = $code;

        $member->reg_fee = 'No';
        $member->dues_fee = 'No';   
        $member->save();

        $member->notify(new WelcomeEmailNotification($member));

        $business = 'https://paystack.com/pay/msmefee';
        $starter = 'https://paystack.com/pay/startupfee';
        $membership = $request->type;
    
        if($membership == 'Starter'){
            $url = $starter;
        }
        elseif($membership == 'Business'){
            $url = $business;
        }
                
        return redirect()->away($url);

        // return redirect()->route('message')
        // ->with('success', 'Thank You for Registering. Check your Mail and follow the link to Make Payment.');
    }

    public function user_create($mid){

        $pass = "12345678";
        $data = Member::find($mid);
        $role = $data->membership_type;

        $user = new User ;
        $user->member_mid = $data->mid;
        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = Hash::make($pass);

        $user->save();
        $user->assignRole($role);

        $data->dues_fee = "Yes";
        $data->update();

        $user->notify(new UserLoginDetails($user));

        return redirect()->route('member.dues')
        ->with('success', 'Member Approved Successfully');

    }
    
    public function reg_approve($mid){
        $member = Member::find($mid);
        // dd($member);
        $member->reg_fee = "Yes";
        $member->update();

        $member->notify(new RegistrationPaymentConfirmation($member));

        return redirect()->route('member.reg')
        ->with('success', 'Member Approved Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

  
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($mid)
    {
        //
        $member = Member::find($mid);
        return view('starter.edit', compact('member'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestt
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $requestt, $id)
    {
        //
        
    }
    public function business_create(Request $request)
    {
            $business = new Business;
  
            $business->company = $request->company;
            $business->reg_number = $request->reg_number;
            $business->ownership_type = $request->ownership_type;
            $business->telephone = $request->telephone;
            $business->business_email = $request->business_email;
            $business->website = $request->website;
            $business->address = $request->address;
            $business->activity = $request->activity;
            $business->member_mid = $request->mid;    
            $business->save();

            return back()
                ->with('success','Business Info Updated successfully.');

    }
    public function bus(Request $request, $mid)
    {
        

        $member = Member::find($mid);

        // dd($member);
            // $business = Business::where('member_mid',$member)->get();
            $input = $request->all();

            // dd($input);

            $member->business->update($input);

            return back()
                ->with('success','Business Info Updated successfully.');
    
    }


    public function file_store(Request $request, $mid)
    {
        //  dd('hiiiii');

        if($request->business_doc == null){
            return back()
            ->with('error','No file Selected');
        }
        else{

            $member = Member::find($mid);


            $this->validate($request, [
                'business_doc' => 'required|mimes:pdf|max:2048',               
            ]);
        // $validatedData = $request->validate([
        //  'business_doc' => 'required|PDF|max:2048',
 
        // ]);
 
        $name = $request->file('business_doc')->getClientOriginalName();

        $save = $request->file('business_doc')->store('public/files');

        $path = $request->file('business_doc')->store('storage/files');
 
 
        $member->business->business_doc = $name;
        $member->business->business_doc_path = $path;
                // $business->logo = $filename;
        $member->business->update();

        // $save = new File;
 
        // $save->name = $name;
        // $save->path = $path;
 
        return back()->with('success', 'File Has been uploaded successfully');
    }
    }
    public function pdf($mid){
        $member = Member::find($mid);
        $filename = $member->business->business_doc_path;

        // dd($filename);

        return Response::make(file_get_contents($filename), 200, [
                       'content-type'=>'application/pdf',
                   ]);
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
