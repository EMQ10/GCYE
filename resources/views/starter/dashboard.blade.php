@extends('layouts.dashboard.main')

@section('content')

              <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            {{-- <h3>About Me</h3> --}}
                        </div>
                       <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" 
                            data-toggle="dropdown" aria-expanded="false">...</a>
    
                            <div class="dropdown-menu dropdown-menu-right">
                                {{-- <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a> --}}
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                {{-- <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="single-info-details">
                        <div class="item-img">
                            @if ($member->image == null){
                                <img src="img/figure/student1.jpg" alt="student">
                            }
                            @else
                            <img src="/images/{{$member->image}}" alt="student">
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
                        
                        <div class="item-content">
                            <div class="header-inline item-header">
                                <h3 class="text-dark-medium font-medium">Member ID: <strong style="color:green">{{ $member->mid }}</strong></h3>
                                <div class="header-elements">
                                    <ul>
                                        <li><a href="#"><i class="far fa-edit"></i></a></li>
                                        {{-- <li><a href="#"><i class="fas fa-print"></i></a></li>
                                        <li><a href="#"><i class="fas fa-download"></i></a></li> --}}
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
                                        <hr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>

            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            {{-- <h3>About Me</h3> --}}
                        </div>
 
                    </div>

                    <div class="single-info-details">
                        <div class="item-img">
                            {{-- @if ($member->image == null)
                            <img src="img/figure/student1.jpg" alt="student">
                            @else
                            <img src="/images/{{$member->image}}" alt="student">
                            @endif --}}

                            {{-- <div class="mt-4">
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
                            </div> --}}
                            
                            
                        </div>
                        
                        <div class="item-content">
                            <div class="header-inline item-header mt-3" style="text-align: center">
                                <div style="text-align: center"> </div>
                                <h3 class="text-dark-medium font-medium" style="color:#fea801">BUSINESS INFORMATION</h3>
                                <div class="header-elements">
                                    <ul>
                                        <li><a href="{{ route('member.edit',$member->mid) }}"><i class="far fa-edit"></i></a></li>
                                        {{-- <li><a href="#"><i class="fas fa-print"></i></a></li>
                                        <li><a href="#"><i class="fas fa-download"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div><hr>

                            <div class="info-table table-responsive">
                                <table class="table text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>Designation / Position :</td>
                                            @if ($member->position == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->position}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Name of Company/Organization :</td>
                                            @if ($member->company == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->company }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Company Registration Number :</td>
                                            @if ($member->reg_number== null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->reg_number }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Business Ownership Type :</td>
                                            @if ($member->ownership_type == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->ownership_type }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Business Telephone :</td>
                                            @if ($member->telephone == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->telephone }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Business Email :</td>
                                            @if ($member->business_email == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->business_email }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Business Website(if any) :</td>
                                            @if ($member->website == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->website }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Business Address :</td>
                                            @if ($member->address == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->address }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Activities of Company/Group :</td>
                                            @if ($member->activity == null)
                                            <td class="font-medium text-dark-medium" style="color: red">None</td>
                                            @else
                                            <td class="font-medium text-dark-medium">{{ $member->activity }}</td>
                                            @endif
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
         
         
            <div class="row">
                <!-- Student Info Area Start Here -->
                <div class="col-4-xxxl col-12">
                    <div class="card dashboard-card-ten">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>About Me</h3>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">...</a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-times text-orange-red"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                    </div>
                                </div>
                            </div>
                            <div class="student-info">
                                <div class="media media-none--xs">
                                    <div class="item-img">
                                        <img src="img/figure/student.png" class="media-img-auto" alt="student">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="item-title">Jessia Rose</h3>
                                        <p>Aliquam erat volutpat. Curabiene natis massa
                                            sedde lacustiquen sodale word moun taiery.</p>
                                    </div>
                                </div>
                                <div class="table-responsive info-table">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">Jessia Rose</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium">Female</td>
                                            </tr>
                                            <tr>
                                                <td>Father Name:</td>
                                                <td class="font-medium text-dark-medium">Fahim Rahman</td>
                                            </tr>
                                            <tr>
                                                <td>Mother Name:</td>
                                                <td class="font-medium text-dark-medium">Jannatul Kazi</td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium">07.08.2006</td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium">Islam</td>
                                            </tr>
                                            <tr>
                                                <td>Father Occupation:</td>
                                                <td class="font-medium text-dark-medium">Graphic Designer</td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail:</td>
                                                <td class="font-medium text-dark-medium">jessiarose@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Admission Date:</td>
                                                <td class="font-medium text-dark-medium">05.01.2019</td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium">2</td>
                                            </tr>
                                            <tr>
                                                <td>Section:</td>
                                                <td class="font-medium text-dark-medium">Pink</td>
                                            </tr>
                                            <tr>
                                                <td>Roll:</td>
                                                <td class="font-medium text-dark-medium">10005</td>
                                            </tr>
                                            <tr>
                                                <td>Adress:</td>
                                                <td class="font-medium text-dark-medium">House #10, Road #6,
                                                    Australia</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">+ 88 9856418</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection



