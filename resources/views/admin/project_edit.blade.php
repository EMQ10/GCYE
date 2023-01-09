@extends('layouts.admin_dashboard.main')



@section('content')


                <div class="card edit">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Projects</h3>
                                <hr class="hr">

                            </div>
                            
                          
                        </div>

                        <form action="{{ route('updating.event',$projects->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data" >
                            @method('PUT')

                            @csrf
                        <div class="row gutters-15">
                            <div class="single-info-details col-xl-12 col-lg-6 col-12 form-group">
                                <div class="item-img">
        
                                    @if ($projects->image == null)
                                    <img class="bb" src="img/figure/student1.jpg" alt="profile_picture">
                                    @else
                                    <img class="bb" src="/projects/{{$projects->image}}" alt="profile_picture">
                                    @endif
        
                                                <div class="form-group mt-4">
                                                    <input type="file" name="image" class="form-control ">
                                                </div>      
        
                                </div>
                                <div class="item-content">
                                    
                                    <div class="form-group col-xl-12 col-lg-12 col-12">
                                        <label style="color: #fea801"> Event Title</label>
                                        <input type="text" value="{{ $projects->title }}" name="title" style="width: 100%" class="form-control">
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-6 col-12">
                                        <label style="color: #fea801"> Event Description</label><br>
                                        <textarea name="description" class="p-3" cols="60" rows="3">{{ $projects->description }}</textarea>
                                    </div>
                                   
                                    <div class="form-group col-xl-6 col-lg-6 col-12">
                                        <label style="color: #fea801"> More Description</label><br>
                                        <textarea name="description1" class="p-3" cols="60" rows="3">{{ $projects->description1 }} </textarea>
                                    </div>
                                </div>   

                            </div>



                            <div class="form-group col-xl-3 col-lg-6 col-12">
                                <label style="color: #fea801"> Start Date</label>
                                <input type="text"  name="startdate" value="{{ $projects->startdate}}"
                                    class="form-control text-center">
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-12">
                                <label style="color: #fea801"> End Date</label>
                                <input type="text" name="enddate" value="{{ $projects->enddate }}"
                                    class="form-control text-center">
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-12">
                                <label style="color: #fea801"> Start Time</label>
                                <input type="text" name="starttime" value="{{ $projects->starttime }}"
                                    class="form-control text-center">
                            </div>
                            <div class="form-group col-xl-3 col-lg-6 col-12">
                                <label style="color: #fea801"> End Date</label>
                                <input type="text" name="endtime" value="{{ $projects->endtime }}"
                                    class="form-control text-center">
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-12">
                                <label style="color: #fea801"> Location</label>
                                <input type="text" name="location" value="{{ $projects->location }}" class="form-control">
                            </div>
                            <div class="form-group col-xl-2 col-lg-6 col-12">
                                <label style="color: #fea801"> Registration Deadline</label>
                                <input type="text" name="deadline" value="{{ $projects->deadline }}"
                                    class="form-control text-center">
                            </div>
                            <div class="form-group col-xl-4 col-lg-6 col-12">
                                <label style="color: #fea801"> Category</label>
                                <input type="text" name="category" value="{{ $projects->category }}" 
                                    class="form-control">
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-12">
                                <label style="color: #fea801"> Event Type</label>
                                <input type="text" name="event_type" value="{{ $projects->event_type }}"
                                    class="form-control">
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-12">
                                <label style="color: #fea801"> Organiser</label>
                                <input type="text" name="organiser" value="{{ $projects->organiser }}"
                                    class="form-control">
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-12">
                                <label style="color: #fea801"> Register Message</label>
                                <input type="text" name="link_text" value="{{ $projects->link_text }}"
                                    class="form-control">
                            </div>
                            <div class="form-group col-xl-6 col-lg-6 col-12">
                                <label style="color: #fea801">Registration Link</label>
                                <input type="text" name="link" value="{{ $projects->link }}" class="form-control">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success">Update
                            Changes</button>
                        
                    </form>


                </div>
            </div>
        


@endsection
