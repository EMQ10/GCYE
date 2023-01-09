@extends('layouts.dashboard.main')

@section('content')

              <div class="card height-auto">
                <div class="card-body plan">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Profile</h3>
                            <hr class="hr">
                        </div>
                    </div>
                    <div class="single-info-details">
                        <div class="item-img text-center">
                            <h6 style="width: 100%" class="text-center btn btn-outline-info">Profile Picture</h6>

                            @if ($member->image == null)
                            <img class="bb" src="img/figure/student1.jpg" alt="profile_picture">
                            @else
                            <img class="bb" src="/images/{{$member->image}}" alt="profile_picture">
                            @endif

                            <div class="mt-4">
                                <form action="{{ route('image-upload.post',$member->mid) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-xl-10 col-lg-6 col-12 form-group">
                                            <input type="file" name="image" class="form-control ">
                                            @if ($errors->has('image'))
                                                <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                        
                                        <div class="mt-2 bt">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                        
                        <div class="item-content" >
                            <h6 style="width: 100%" class="text-center btn btn-outline-info">Personal Information</h6>

                            <div class="header-inline item-header">
                                <h3 class="text-dark-medium font-medium">Member ID: <strong style="color:green">{{ $member->mid }}</strong></h3>
                                <div class="header-elements">
                                    <ul>
                                       </ul>
                                </div>
                            </div>

                            <div class="info-table table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td class="font-medium text-dark-medium">{{ $member->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td class="font-medium text-dark-medium">{{ $member->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td class="font-medium text-dark-medium">{{ $member->dob }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td class="font-medium text-dark-medium">{{ $member->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number:</td>
                                            <td class="font-medium text-dark-medium">{{ $member->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Region:</td>
                                            <td class="font-medium text-dark-medium">{{ $member->region }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Business --}}
            <div class="card height-auto">
                <div class="card-body plan">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Business Data</h3>

                            <hr class="hr">
                        </div>
                    </div>
                    
                    <div class="single-info-details">

                        <div class="item-img text-center" >
                            <h6 style="width: 100%" class="text-center btn btn-outline-info">Business Logo</h6>

                            @if ($member->business == null || $member->business->logo == null)
                            <img class="" src="l.png" alt="Business_logo">
                            @else
                            <img class="bb" id="logo-img" src="/logos/{{$member->business->logo}}" alt="Business_logo">
                            @endif

                            <div class="mt-4">

                                <form action="{{ route('logo-upload.post',$member->mid) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                    
                                        <div class="col-xl-10 col-lg-6 col-12 form-group">
                                            <input type="file" name="logo" class="form-control ">
                                            @if ($errors->has('logo'))
                                                <span class="text-danger text-left">{{ $errors->first('logo') }}</span>
                                            @endif
                                        </div>
                                        
                                        <div class="mt-2 bt">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>

                                    </div>
                                </form>
                            </div>


          </div>
                        
                        
                        <div class="item-content">
                            <h6 style="width: 100%" class="text-center btn btn-outline-info">Business Information</h6>

                           
                            <div class="header-inline item-header">
                                <h3 class="text-dark-medium font-medium pl-4">Member ID: <b style="color: green">{{ $member->mid }}</b> </h3>
                                <div class="header-elements">
                                    <ul>
                                        <li><a href="" class="modal-trigger" data-toggle="modal" data-target="#sign-up"><i class="far fa-edit"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="info-table table-responsive">

                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Name of Company/Organization</td>
                                            @if ($member->business == null ||$member->business->company == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->company}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Designation / Position</td>
                                            @if ($member->business == null ||$member->business->position == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->position}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Company Registration Number:</td>
                                            @if ($member->business == null ||$member->business->reg_number == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->reg_number}}</td>
                                            @endif                                        
                                        </tr>
                                        <tr>
                                            <td>Business Ownership Type:</td>
                                            @if ($member->business == null ||$member->business->ownership_type == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->ownership_type}}</td>
                                            @endif                                        
                                        </tr>
                                        <tr>
                                            <td>Business Telephone</td>
                                            @if ($member->business == null ||$member->business->telephone == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->telephone}}</td>
                                            @endif                                        
                                        </tr>
                                        <tr>
                                            <td>Business Email:</td>
                                            @if ($member->business == null ||$member->business->business_email == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->business_email}}</td>
                                            @endif                                        
                                        </tr>
                                        <tr>
                                            <td>Business Website(if any):</td>
                                            @if ($member->business == null ||$member->business->website == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->website}}</td>
                                            @endif                                        
                                        </tr>
                                        <tr>
                                            <td>Business Address:</td>
                                            @if ($member->business == null ||$member->business->address == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->address}}</td>
                                            @endif                                        
                                        </tr>
                                        <tr>
                                            <td>Activities of Company/Group:</td>
                                            @if ($member->business == null ||$member->business->activity == null)
                                            <td class="font-medium text-danger">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business->activity}}</td>
                                            @endif                                        
                                        </tr>
                                        {{-- <tr>
                                        <div class="mt-2" style="align-items:flex-end">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                            
                        
                        </div>
                    </div>
                    <div class="ui-modal-box">
                        
                        <div class="modal-box">
                            <!-- Modal trigger -->
                            
                            <!-- Sign Up Modal -->
                            <div class="modal sign-up-modal fade" id="sign-up" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="close-btn">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            {{-- <div class="item-logo">
                                                <img src="img/logo2.png" alt="logo">
                                            </div> --}}
                                            @if ($member->business == null)
                                            <form action="{{ route('business.create') }}" method="POST" class="login-form" autocomplete="off">
                                                @csrf
                                                <div class="row gutters-15">
                                                    <div class="form-group col-12" style="display: none">
                                                        <input  type="text" name="mid" value="{{ $member->mid }}" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Name of Company/Organization</label>
                                                        <input  type="text" name="company" placeholder="Name of Company/Organization" class="form-control" />
                                                    </div>
                                                    <div class="col-12 form-goup">
                                                        <label>Designation/Position</label>
                                                        <input   type="text" name="position" class="{{($errors->first('position') ? " form-error" : "")}}" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Company Registration Number</label>
                                                        <input type="text" name="reg_number" placeholder="Company Registration Number" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Business Ownership Type</label>
                                                        <select name="ownership_type" class="form-control" class="select">
                                                            <option value="Select Ownership Type">Select Business Ownership Type</option>
                                                            <option value="Co-Operative ">Co-Operative </option>
                                                            <option value="Partnership ">Partnership </option>
                                                            <option value="Limited Liability Company ">Limited Liability Company </option>
                                                            <option value="Sole Proprietorship ">Sole Proprietorship </option>
                                                            <option value="Not for Profit ">Not for Profit </option>
                                                            <option value="Social Enterprise">Social Enterprise</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Business Telephone</label>
                                                        <input type="text" name="telephone" placeholder="Business Telephone" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Business Email</label>
                                                        <input type="text" name="business_email" placeholder="Business Email" class="form-control">
                                                    </div><div class="form-group col-12">
                                                        <label>Business Website(if any)</label>
                                                        <input type="text" name="website" placeholder="Business Website(if any)" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Business Address</label>
                                                        <textarea type="text" cols="50" rows="10" name="address" placeholder="Business Address" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Activities of Company/Group</label>
                                                        <textarea type="text" cols="50" rows="10" name="activity" placeholder="Activities of Company/Group" class="form-control"></textarea>
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <button type="submit" class="btn login-btn">Update Business Data</button>
                                                    </div>
                                                </div>
                                            </form> 
                                            
                                            @else
                                            <form action="{{ route('bus.up',$member->mid) }}" method="POST" class="login-form" autocomplete="off">
                                                @csrf
                                                @method('PUT')

                                                <div class="row gutters-15">
                                                    <div class="form-group col-12" style="display: none">
                                                        <input  type="text" name="mid" value="{{ $member->mid }}" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Name of Company/Organization</label>
                                                        <input  type="text" name="company" value="{{ $member->business->company }}" placeholder="Name of Company/Organization" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Designation/Position</label>
                                                        <input type="text" name="position" value="{{ $member->business->position }}" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Company Registration Number</label>
                                                        <input type="text" name="reg_number" value="{{ $member->business->reg_number }}" placeholder="Company Registration Number" class="form-control">
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Business Ownership Type</label>
                                                        <select name="ownership_type" class="form-control" class="select">
                                                            <option value="Select Ownership Type">Select Business Ownership Type</option>
                                                            <option value="Co-Operative ">Co-Operative </option>
                                                            <option value="Partnership ">Partnership </option>
                                                            <option value="Limited Liability Company ">Limited Liability Company </option>
                                                            <option value="Sole Proprietorship ">Sole Proprietorship </option>
                                                            <option value="Not for Profit ">Not for Profit </option>
                                                            <option value="Social Enterprise">Social Enterprise</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group col-sm-12">
                                                        <label>Business Telephone</label>
                                                        <input type="text" name="telephone" value="{{ $member->business->telephone }}" placeholder="Business Telephone" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Business Email</label>
                                                        <input type="text" name="business_email" value="{{ $member->business->business_email }}" placeholder="Business Email" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Business Website(if any)</label>
                                                        <input type="text" name="website" value="{{ $member->business->website }}" placeholder="Business Website(if any)" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Business Address</label>
                                                        <input type="text" style="height: 50px" name="address" value="{{ $member->business->address}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label>Activities of Company/Group</label>
                                                        <input type="text" name="activity" value="{{ $member->business->activity }}" class="form-control">
                                                    </div>
                                                   
                                                    <div class="form-group col-12 mb-5">
                                                        <button type="submit" class="btn login-btn">Update Business Data</button>
                                                    </div>
                                                </div>
                                            </form>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                         
                    </div>


                    <div class="container mt-5">
 
                        <h6 style="width: 100%" class="text-center btn btn-outline-info">Business Registration Document</h6>

                        {{-- <i class="fa fa-file-pdf" style="font-size:48px;color:red"></i> --}}
                        
                        <div class="row5">
                            <div class="d-flex flex column5">
                                <div class="p-2"><i class="fa fa-file-pdf" style="font-size:50px;color:red"></i></div>
                                
                                <div class="pl-4" ><h4 class="pt-3 mb-0" style="color: #fe8103">Upload Business Registration Document</h4></div>
    
                            </div>
                            <div class=" column5 mt-5">
                                <form action="{{ route('file.store',$member->mid) }}" method="POST" enctype="multipart/form-data" id="upload-file" autocomplete="off">
                                       @csrf

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <input type="file" name="business_doc" placeholder="Choose file" id="file">
                                                @if ($errors->has('business_doc'))
                                                <span class="text-danger text-left">{{ $errors->first('business_doc') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                           
                                        <div class="col-md-4">
                                            <button type="submit" class=" float-right btn btn-primary" id="submit">Submit</button>
                                        </div>
                                    </div>     
                                </form>
                            </div>

                            <div class="column5 text-center">
                                <h6></h6>
                                <hr>
                                @if($member->business == null || $member->business->business_doc == null)
                                <h4 style="color:red">None</h4>
                                @else
                                <h4><i class=" p-2 fa fa-file-pdf" style="font-size:30px;color:red"></i>{{ $member->business->business_doc }} <a href="{{ route('pdf',$member->mid) }}"> <button class="btn btn-primary ml-2">View pdf</button></a></h4>
                                @endif
                            </div>
                        </div>
                      </div>

            </div>
            
         


@endsection



