@extends('layouts.admin_dashboard.main')

@section('content')

    <!-- Breadcubs Area End Here -->
    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20">
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="dashboard-summery-one mg-b-20">
              <div class="row align-items-center">
                  <div class="col-4">
                      <div class="item-icon bg-light-green ">
                          <i class="flaticon-multiple-users-silhouette text-green"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="item-content">
                          <div class="item-title">Users</div>
                          <div class="item-number"><span>{{ $usercount }}</span></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="dashboard-summery-one mg-b-20">
              <div class="row align-items-center">
                  <div class="col-4">
                      <div class="item-icon bg-light-blue">
                          <i class="flaticon-multiple-users-silhouette text-blue"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="item-content">
                          <div class="item-title">Business Members</div>
                          <div class="item-number"><span>{{ $businesscount }}</span></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="dashboard-summery-one mg-b-20">
              <div class="row align-items-center">
                  <div class="col-4">
                      <div class="item-icon bg-light-yellow">
                          <i class="flaticon-couple text-orange"></i>
                      </div>
                  </div>
                  <div class="col-8">
                      <div class="item-content">
                          <div class="item-title">Starter Members</div>
                          <div class="item-number"><span>{{ $startercount }}</span></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
          <div class="dashboard-summery-one mg-b-20">
              <div class="row align-items-center">
                  <div class="col-6">
                      <div class="item-icon bg-light-red">
                          <i class="flaticon-money text-red"></i>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="item-content">
                          <div class="item-title">Earnings</div>
                          <div class="item-number"><span>$</span><span class="counter" data-num="193000">1,93,000</span></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <div class="card height-auto">
        <div class="card-body">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-ticket"> Tickets</i>
                    </div>
    
                    <div class="panel-body">
                        @if ($tickets->isEmpty())
                            <p>There are currently no tickets.</p>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Last Updated</th>
                                    <th style="text-align:center" colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <td>
                                            {{ $ticket->category->name }}
                                        </td>
                                        <td>
                                            <a href="{{ url('tickets/'. $ticket->ticket_id) }}">
                                                #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                            </a>
                                        </td>
                                        <td>
                                            @if ($ticket->status === 'Open')
                                                <span class="label label-success">{{ $ticket->status }}</span>
                                            @else
                                                <span class="label label-danger">{{ $ticket->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $ticket->priority}}</td>
                                        <td>{{ $ticket->updated_at }}</td>
                                        <td>
                                            @if($ticket->status === 'Open')
                                                <a href="{{ url('tickets/' . $ticket->ticket_id) }}" class="btn btn-primary">Comment</a>
    
                                                <form action="{{ route('close',$ticket->ticket_id) }}" method="POST">
                                                    {{-- {!! csrf_field() !!} --}}
                                                    @csrf  
    
                                                    <button type="submit" class="btn btn-danger">Close</button>
                                                </form>
                                            @endif
    
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
    
                            {{ $tickets->render() }}
                        @endif
                    </div>
                </div>
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



