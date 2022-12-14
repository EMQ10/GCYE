@extends('layouts.dashboard.main')

@section('content')

              <div class="card height-auto">
                <div class="card-body">
                    <form action="{{route('member.update',$member->mid)}}" method="POST" class="new-added-form" autocomplete="off">
                        @csrf
                            @method('PUT')

                            <div>
                                <h3 class="tab" >MEMBER BUSINESS</h3>
                            </div>

                            <div class="row">
                                {{-- <hr>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Surname*</label>
                                    <input type="text" name="surname" class="form-control" value="">
                                        @if ($errors->has('surname'))
                                        <span class="text-danger">{{ $errors->first('surname') }}</span>
                                        @endif
                                </div> --}}
                            </div>

                            <span class="float-right">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-green ">Update</button>
                            </span>
                    </form>
                 </div>
            </div>

         


@endsection



