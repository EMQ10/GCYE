@extends('layouts.dashboard.main')



@section('content')

            @if (\Session::has('success'))
            <div class="alert alert-success" role="alert">
                <p class="mb-0" style="text-align: center; text-transform:uppercase ">{{ \Session::get('success') }}</p>
            </div>
            @endif
            @if (\Session::has('error'))
            <div class="alert alert-danger" role="alert">
                <p class="mb-0" style="text-align: center; text-transform:uppercase ">{{ \Session::get('error') }}</p>
            </div>
            @endif


                <div class="card">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Projects</h3>
                                <hr class="hr">

                            </div>
                            
                           <div class="dropdown">

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
                                              <a class="float-right" href="{{ route('project.detail',$project->id) }}"><button class="btn btn-info">More Details</button></a>
                        
                                            </div>
                                          </div>
                        
                                        </div>
                                      @endforeach
                        </div>
                        @endif

                </div>
            </div>
            

@endsection
