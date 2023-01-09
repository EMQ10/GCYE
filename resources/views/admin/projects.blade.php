@extends('layouts.admin_dashboard.main')



@section('content')


                <div class="card">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Projects</h3>
                                <hr class="hr">

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Error Creating Project!</strong> All fields where not filled.<br><br>
                                    {{-- <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul> --}}
                                </div>
                            @endif
                            </div>
                            
                           <div class="dropdown">

                            <a type="button" class="" data-toggle="modal"
                            data-target="#right-slide-modal"><i class="fa fa-plus-circle" style="color:green; font-size:30px"></i></a>

                            </div>
                        </div>
                    
                        @if ($projects == null)
                            <h3  style="color: red">There are no projects currently.</h3>
                         @else   
                        <div class="row5">
                            @foreach ($projects as $project)
                        
                                        <div class="column5">
                        
                                          <div class="card5 bg-white">
                                            <div style="height:200px">
                                                <img src="projects/{{ $project->image }}" alt="project_image" style="width:100%;height:100%;object-fit: cover;">
                        
                                            </div>
                                            <div class="container5">
                                              <h2>{{ $project->title }}</h2>
                                              <p class="title5"><i class="far fa-calendar-alt"></i> {{ $project->startdate }} @ {{ $project->starttime }} - {{ $project->enddate }} @ {{ $project->endtime }}</p>
                                              <p> <i class="fa fa-map-marker-alt"></i> {{ $project->location }}</p>
                                              <a class="float-right pl-2" href="{{ route('edit.event',$project->id) }}"><button class="btn btn-warning">Edit</button></a>

                                              <a class="float-right" href="{{ route('project.detail',$project->id) }}"><button class="btn btn-info">More Details</button></a>
                        
                                            </div>
                                          </div>
                        
                                        </div>
                                      @endforeach
                        </div>
                        @endif

                </div>
            </div>
            




            <div class="ui-modal-box">
                <div class="modal-box">
                    
                    <!-- Right slide Modal -->
                    <div class="modal right-slide-modal fade" id="right-slide-modal" tabindex="-1"
                        role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 style="color: green" class="modal-title">Create Events / Projects</h3>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Error Creating Project!</strong> All fields where not filled.<br><br>
                                    {{-- <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul> --}}
                                </div>
                            @endif
                                    <div>
                                        <h5 style="color: red">Please fill all the details of the form.</h5>
                                    </div>
                                    <form action="{{ route('create.event') }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
                          
                                         
                                            @csrf
                                        <div class="row gutters-15">
                                            <div class="form-group col-12">
                                                <label style="color: #fea801"> Event Title</label>
                                                <input type="text" value="{{ old('title') }}" name="title" placeholder="Title" class="form-control  {{($errors->first('title') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-12">
                                                <label style="color: #fea801"> Event Description</label>
                                                <textarea name="description" value="{{ old('description') }}" class="{{($errors->first('description') ? " form-error" : "")}}" cols="47" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-12">
                                                <label style="color: #fea801"> More Description</label>
                                                <textarea name="description1" value="{{ old('description1') }}" class="{{($errors->first('description1') ? " form-error" : "")}}" cols="47" rows="3"></textarea>
                                            </div>
                                            <div class="form-group col-6">
                                                <label style="color: #fea801"> Start Date</label>
                                                <input type="text" name="startdate" value="{{ old('startdate') }}" placeholder="12/12/22"
                                                    class="form-control {{($errors->first('startdate') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-6">
                                                <label style="color: #fea801"> End Date</label>
                                                <input type="text" name="enddate" value="{{ old('enddate') }}" placeholder="12/12/22"
                                                    class="form-control {{($errors->first('enddate') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-6">
                                                <label style="color: #fea801"> Start Time</label>
                                                <input type="text" name="starttime" value="{{ old('starttime') }}" placeholder="10:09 AM"
                                                    class="form-control {{($errors->first('starttime') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-6">
                                                <label style="color: #fea801"> End Date</label>
                                                <input type="text" name="endtime" value="{{ old('endtime') }}" placeholder="17:30 PM"
                                                    class="form-control {{($errors->first('endtime') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label style="color: #fea801"> Location</label>
                                                <input type="text" name="location" value="{{ old('location') }}" placeholder="Location" class="form-control {{($errors->first('location') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label style="color: #fea801"> Registration Deadline</label>
                                                <input type="text" name="deadline" value="{{ old('deadline') }}" placeholder="12/12/2022"
                                                    class="form-control {{($errors->first('deadline') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label style="color: #fea801"> Category</label>
                                                <input type="text" name="category" value="{{ old('category') }}" placeholder="Business"
                                                    class="form-control {{($errors->first('category') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-12">
                                                <label style="color: #fea801"> Event Type</label>
                                                <input type="text" name="event_type" value="{{ old('event_type') }}" placeholder="Event Type"
                                                    class="form-control {{($errors->first('event_type') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-12">
                                                <label style="color: #fea801"> Organiser</label>
                                                <input type="text" name="organiser" value="{{ old('organiser') }}" placeholder="GCYE"
                                                    class="form-control {{($errors->first('organiser') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-12">
                                                <label style="color: #fea801"> Register Message</label>
                                                <input type="text" name="link_text" value="{{ old('text_link') }}" placeholder="Register for event at Ghc 50"
                                                    class="form-control {{($errors->first('text_link') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-12">
                                                <label style="color: #fea801">Registration Link</label>
                                                <input type="text" name="link" value="{{ old('link') }}" placeholder="https://forms.gle/gcye"class="form-control {{($errors->first('link') ? " form-error" : "")}}">
                                            </div>
                                            <div class="form-group col-12">
                                                <label style="color: #fea801">Event Image</label>
                                                <input type="file" name="image" value="{{ old('image') }}" class="form-control {{($errors->first('image') ? " form-error" : "")}}">
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-success">Save
                                            Changes</button>
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection
