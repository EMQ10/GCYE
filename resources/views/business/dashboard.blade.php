@extends('layouts.dashboard.main')

@section('content')

<div class="row m-4">
    <div class="item-title">
        <h3>Notification 
            <hr class="hr">
        </h3>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="heading-layout1">
                  
           
                </div>
                <form class="new-added-form">
                    <div class="row">

                    </div>
                </form>
            </div>
        </div>
    </div>
    

            

</div>

        <div class="item-title">
            <h3>projects                 
                <hr class="hr">
            </h3>
            </div>
<div class="row5">
    @foreach ($projects as $project)

                <div class="column5">

                  <div class="card5 bg-white">
                    <div style="height:200px">
                        <img src="projects/{{ $project->image }}" alt="Jane" style="width:100%;height:100%;object-fit: cover;">

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
    

   

@endsection



