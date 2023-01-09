@extends('layouts.dashboard.main')

@section('title', $ticket->title)

@section('content')
           <div class="row">
                <div class="col-4-xxxl col-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Ticket</h3>
                                    <hr class="hr">
                                </div>

                            </div>
                                <div class="row">
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <button type="button" style="width: 100%" class="btn-fill-md radius-4 text-light bg-light-sea-green">#{{ $ticket->ticket_id }} - {{ $ticket->title }} </button>
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>Message : </label>
                                        <h6 class="btn-fill-md radius-4 text-light-sea-green border-light-sea-green">{{ $ticket->message }}</h6>                                    
                                    </div>
                                     <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>Category : <strong class="text-orange-peel">{{ $ticket->category->name }}</strong> </label>
                                        
                                        
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <p>
                                            @if ($ticket->status === 'Open')
                                                Status: <span class="label bg-success" style="color: white; padding:2%; border-radius:5%">{{ $ticket->status }}</span>
                                            @else
                                                Status: <span class="label bg-danger" style="color: white; padding:2%; border-radius:5%">{{ $ticket->status }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                        <label>Created On : {{ $ticket->created_at->diffForHumans() }}</label>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-4-xxxl col-12">
                    <div class="card ">
                        <div class="card-body height-auto">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Comments</h3>
                                    <hr class="hr">
                                </div>
                                 
                            </div>

            <hr>

                            <div class="notice-board-wrap">
                                
                                    @include('tickets.comments')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4-xxxl col-12">
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title">
                                    <h3>Add Reply</h3>
                                    <hr class="hr">
                                </div>
                            </div>
                                        @include('tickets.reply')

                        </div>
                    </div>
                </div>
            </div>

@endsection