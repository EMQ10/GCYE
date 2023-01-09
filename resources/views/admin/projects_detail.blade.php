@extends("layouts.admin_dashboard.main")
@section('content')

        
        <img class="hi" style="background-color: white; height:50px; width:100%" src="../orange.jpeg" alt="student">

        <div class="card height-auto">
            <div class="card-body">
                
                {{-- <div class="heading-layout1 hw"> --}}

                    {{-- <div> --}}
                        <div class="single-info-details text-center m-5">
                            <div class="project_image">
                                {{-- <h1>hiiiiiiiiii</h1> --}}
                                <img class="bb" src="../projects/{{ $projects->image }}">

                            </div>

                        </div>                    
                    {{-- </div> --}}

                {{-- </div> --}}
                <div class="mt-5">
                    <hr class="hr">
                    <h2 class="mt-4 text-center">EVENTS DETAILS</h2>
                    <hr class="hr">

                </div>
                <div class="row3">
                    <div class="column3">
                <div class="notice-board-wrap">
                    <div class="notice-list">
                        <table style="width:100%">
                            <tr>
                                <th>Start Date</th>
                                <td>{{ $projects->startdate }}</td>
                              </tr>
                              <tr>
                                <th>End Date</th>
                                <td>{{ $projects->enddate }}</td>
                              </tr>
                          </table>
                    </div>
                    <div class="notice-list">
                        <table style="width:100%">
                            <tr>
                                <th>Start Time</th>
                                <td>{{ $projects->starttime }}</td>
                              </tr>
                              <tr>
                                <th>End Time</th>
                                <td>{{ $projects->endtime }}</td>
                              </tr>
                          </table>
                    </div>
                    <div class="notice-list">
                        <table style="width:100%">
                            <tr>
                                <th>Location</th>
                                <td>{{ $projects->location }}</td>
                              </tr>
 
                          </table>
                    </div>
                    <div class="notice-list">
                        <table style="width:100%">
                            <tr>
                                <th>Registration Deadline</th>
                                <td>{{ $projects->deadline }}</td>
                              </tr>

                          </table>
                    </div>
                    <div class="notice-list">
                        <table style="width:100%">
                            <tr>
                                <th>Event Type</th>
                                <td>{{ $projects->event_type }}</td>
                              </tr>

                          </table>
                    </div>
                    <div class="notice-list">
                        <table style="width:100%">
                            <tr>
                                <th>Category</th>
                                <td>{{ $projects->category }}</td>
                              </tr>
                          </table>
                    </div>

                </div>    
            </div>
                    <div class="column4">
                      <h2 style="font-weight: bold">{{ $projects->title }}</h2>
                      <h5>{{ $projects->description }}</h5>
                      <h5>{{ $projects->description1 }}</h5>
                      <h5>{{ $projects->link_text }}</h5>
                      <a href="{{ $projects->link }}"><h5 style="color: green" >{{ $projects->link }}</h5></a>
                      <hr>
                      <table style="width:100%; text-align:center;">
                        <tr>
                            <th><i style="font-size:50px; color:#e29700" class="fas fa-user-tie"></i></th>
                            <th> <i style="font-size:50px; color:#e29700"  class="fas fa-map-marker-alt"></i></th>
                          </tr>
                          <tr>
                            <td style="font-size:20px;">Organiser</td>
                            <td style="font-size:20px;">Venue</td>
                          </tr>
                          <tr>
                            <td style="font-size:18px; color:#e29700">{{ $projects->organiser }}</td>
                            <td style="font-size:18px; color:#e29700">{{ $projects->location }}</td>
                          </tr>
                      </table>
                      <hr>
                    </div>

                  </div>

        
    </div>
   
    
</div>




@endsection