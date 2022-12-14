{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html>
<head>
	<title>Register - GCYE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="auth/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <link rel="stylesheet" href="/auth/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</head>

<body>
	<div class="container-fluid body">
		{{-- <div class="row"> --}}
			<div class="col-lg-8 form-block  all2">
				<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 ho form-box">
					<div class="text-center pt-3 ">
						<img  src="logo.png" width="150px">
                        <hr>
					</div>
                    {{-- @foreach ($choice  as $data) --}}
                        
					<h4 class="text-center">
						GCYE <strong> </strong> 
                         MEMBER REGISTRATION FORM
                        <hr>
					</h4>
					<form action="{{ route('member.store') }}" method="POST" class="form-wrapper align-items-center" autocomplete="off">
						@csrf
                        <div id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                              <li class="active">Bio  Data</li>
                              <li>Business Info</li>
                              {{-- <li>Password</li> --}}

                            </ul>
                            <!-- fieldsets -->
                            
                            <fieldset class="row">
                                <div class="col-xl-12 col-lg-6 col-12 form-input">
                                    <label>Full Name <b>*</b></label>
                                    <input  type="text" name="name"  value="{{ old('name') }}"/>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Gender <b>*</b></label>
                                    <br>
                                    <select class="select" name="gender" value="{{ old('gender') }}">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Date of Birth <b>*</b></label>
                                    <input  type="text" name="dob"  value="{{ old('dob') }}"/>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Designation / Position <b>*</b></label>
                                    <input   type="text" name="position" value="{{ old('position') }}" />
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Email (Most Active) <b>*</b></label>
                                    <input  type="email" name="email" value="{{ old('email') }}" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Phone (Most Active) <b>*</b></label>
                                    <input   type="text" name="phone" value="{{ old('phone') }}" />
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Region <b>*</b></label>
                                    <br>
                                <select name="region" value="{{ old('region') }}" class="select" required="required" aria-required="true">
									<option value="Select Region" selected="selected">Select Region</option>
									<option value="Northern ">Northern </option>
									<option value="Ashanti ">Ashanti </option>
									<option value="Western ">Western </option>
									<option value="Volta ">Volta </option>
									<option value="Eastern ">Eastern </option>
									<option value="Upper West ">Upper West </option>
									<option value="Central ">Central </option>
									<option value="Upper East ">Upper East </option>
									<option value="Greater Accra ">Greater Accra </option>
									<option value="Savannah ">Savannah </option>
									<option value="North East ">North East </option>
									<option value="Bono East ">Bono East </option>
									<option value="Oti ">Oti </option>
									<option value="Ahafo ">Ahafo </option>
									<option value="Bono ">Bono </option>
									<option value="Western North ">Western North </option>
									<option value=""></option>
							</select>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>

                            <fieldset >
                                <div class="row">

                               
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Name of Company / Organistation</label>
                                    <input  type="text" name="company"  value="{{ old('company') }}"/>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Company Registration Number</label>
                                    <input  type="text" name="reg_number"  value="{{ old('reg_number') }}"/>

                                   
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Business Ownership Type</label>
                                    <br>
                                    <select name="ownership_type" value="{{ old('ownership_type') }}" class="select">
                                        <option value="Select Business Ownership Type">Select Business Ownership Type</option>
                                        <option value="Co-Operative ">Co-Operative </option>
                                        <option value="Partnership ">Partnership </option>
                                        <option value="Limited Liability Company ">Limited Liability Company </option>
                                        <option value="Sole Proprietorship ">Sole Proprietorship </option>
                                        <option value="Not for Profit ">Not for Profit </option>
                                        <option value="Social Enterprise">Social Enterprise</option>
                                </select>
                                   
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Business Telephone </label>
                                    <input  type="text" name="telephone"  value="{{ old('telephone') }}"/>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Business Email</label>
                                    <input  type="email" name="business_email" value="{{ old('bussiness_email') }}" />
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Business Website (if any)</label>
                                    <input   type="text" name="website" value="{{ old('website') }}" />
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Business Adresss</label>
                                    <textarea name="address" value="{{ old('address') }}" class="p-1" placeholder="e.g:Block 13, East Legon, Accra, Ghana"></textarea>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Activity of Company / Group</label>
                                    <textarea name="activity" value="{{ old('activity') }}" class="p-1" placeholder="Describe your Activities"></textarea>
                                </div>

                            </div>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <button type="submit" name="submit" class="submit action-button">submit </button>
                            </fieldset>
                            {{-- <fieldset >
                             
                                <div class="col-xl-12 col-lg-6 col-12 form-input">
                                    <label>Password</label>
                                    <input  type="password" value="{{ old('password') }}" name="password" class=" @error('password') is-invalid @enderror"/>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-xl-12 col-lg-6 col-12 form-input">
                                    <label>Confirm Password</label>
                                    <input  type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" />
                                </div>

                              
                            </fieldset> --}}
                          </div>
                        
                        


                          {{-- @endforeach --}}

					</form>
				</div>
			</div>

	</div>

<script>
    //jQuery time
(function($) {
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  $(".next").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = (now * 50) + "%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'transform': 'scale(' + scale + ')'
        });
        next_fs.css({
          'left': left,
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

  $(".previous").click(function() {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        //2. take current_fs to the right(50%) - from 0%
        left = ((1 - now) * 50) + "%";
        //3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'left': left
        });
        previous_fs.css({
          'transform': 'scale(' + scale + ')',
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });

})(jQuery);
</script>
</body>
</html>