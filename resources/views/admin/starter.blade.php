@extends('layouts.admin_dashboard.main')

@section('content')
<div class="container">
    <div class="justify-content-center">

<div class="card height-auto">
    <div class="card-header">Starter Members
       @can('member-create')
       <span class="float-right">
           <a class="btn btn-primary" href="{{ route('members.create') }}">New Member</a>
       </span>
       @endcan

   </div> 
   <div class="row mt-5">
       <div class="col-xl-4 col-lg-6 col-12 form-group ">
           <input type="text" class="form-control search"   placeholder="Search Member By Name" id="search">
       </div>
       <div class="col-xl-4 col-lg-6 col-12 form-group">
           <input type="text" class="form-control search"   placeholder="Search Member By Member ID" id="search2">
       </div>
       <div class="col-xl-4 col-lg-6 col-12 form-group">
           <input type="text" class="form-control search"   placeholder="Search Member By Phone Number" id="search3">
       </div>

   </div>
   
   <div class="card-body">
       <div class="table-responsive">

            <table class="table display data-table text-nowrap">
               <thead id="head" class="thead" style="font-style: bold; text-transform:Capitalize">
                   <tr>
                       <th>No.</th>
                       <th>Member ID</th>
                       <th>Full Name</th>
                       <th>Gender</th>
                       <th>phone Number</th>
                       <th>Email</th>
                       <th>Membership Type</th>
                       <th>Dues</th>
                       <th width="280px">Action</th>
                   </tr>
               </thead>
               <tbody id="dynamic-row">
                   @foreach ($members as $member)
                       
                       <tr>
                           <td>{{ $member->id }}</td>
                           <td style="color: green">{{ $member->mid}}</td>
                           <td>{{ $member->name }}</td>
                           <td>{{ $member->gender}}</td>
                           <td>{{ $member->phone }}</td>
                           <td>{{ $member->email }}</td>
                           @if ($member->membership_type == 'Starter')
                           <td style="text-align: center"><a class="btn btn-outline-primary disabled  font" href="">{{ $member->membership_type }}</a></td>

                           @else
                           <td style="text-align: center"><a class="btn btn-outline-success disabled  font" href="">{{ $member->membership_type }}</a></td>
                           @endif

                           @if($member->dues_fee == 'No')
                           <td> <button class="btn btn-danger">{{ $member->dues_fee }}</button> </td>
                            @else
                            <td> <button class="btn btn-success">{{ $member->dues_fee }}</button> </td>
                        @endif
                           <td>

                            @if($member->dues_fee == 'Yes')
                            <a class="btn btn-outline-primary"  href=""><i class="fa fa-pen"></i></a>
                            <a class="btn btn-outline-danger"  href=""><i class="fa fa-trash"></i></a>

                           {{-- <td> <button class="btn btn-outline-primary">Approve</button> </td> --}}
                            @else
                            Approved
                            @endif
                           <td>
                               {{-- <a class="btn btn-success"  href="{{ route('members.show',$member->mid) }}"><i class="fa fa-eye"></i></a></a> --}}
                               @can('member-edit')
                                   {{-- <a class="btn btn-primary" href="{{ route('members.edit',$member->mid) }}"><i class="fa fa-pen"></i></a></a> --}}
{{--                                
                                   <a class="dropdown show">
                                       <a class="btn btn-warning" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           <i class="fa fa-pen"></i>
                                       </a>
                                     
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                         <a class="dropdown-item drop" href="{{ route('members.edit',$member->mid)}}"><i class="far fa-edit"></i> Edit Bio Data</a>
                                         
                                         @if ($member->education != null)              
                                         <a class="dropdown-item drop" href="{{ route('education.edit',$member->mid)}}"><i class="far fa-edit"></i> Edit Education</a>
                                         @else
                                             <a class="dropdown-item add" href="{{ route('education.create',$member->mid)}}"><i class="fa fa-plus"></i> Add Education</a>
                                         @endif

                                        
                                       </div>
                                   </a>
                                      --}}
                               
                                   @endcan
                              
                               @can('member-delete')
                                   {{-- {!! Form::open(['method' => 'DELETE','route' => ['members.destroy', $member->id],'style'=>'display:inline']) !!} --}}
                                   {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                   {!! Form::close() !!} --}}
                               @endcan
                           </td> 
                       </tr>
                   @endforeach
               </tbody> 
           </table> 
       </div>
       {{ $members->render() }}
   </div>
</div>
    </div>
</div>

@endsection