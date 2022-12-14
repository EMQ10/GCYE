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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  </head>

<body>

	<div class="container-fluid">
		{{-- <div class="row"> --}}
      {{-- <div class="text-center mb-1 mt-3">
        <img  src="logo.png" width="150px">
      </div> --}}
      <a href="/login" class="float p-2"><i class="fa fa-arrow-left"></i></a>

      <div class="guideline">

        <h1 style="text-align: center"><img  src="logo.png" width="150px">
          Application Guidelines</h1>
          
        <hr>
        <p>
          <li class="ml-4">First, study the Member Types and Benefits below.</li>
          <li class="ml-4">Pick your preferred member package and proceed to Fill and complete the form online</li>
          <li class="pl-4">Now proceed to pay your registration fee.</li>
          <li class="pl-4">The Council will go through your application and approve your membership.</li>
          <li class="pl-4">Once your membership is approved, you will receive an email requesting you to pay your <strong style="text-transform:capitalize">First Member Subscription (FMS).</strong>  You will receive your member ID and obtain your complete membership status as soon as this is done.</li>

        </p>
      </div>
            <div class="row">
                <div class="column mb-5">
                    {{-- <img  src="b4.png" width="100%"> --}}

                  <h2>Business Member

                    <hr>

                    <p>Business Membership is open to Incorporated companies, sole proprietors, etc own or run by young people who are below 45 years.</p>
                  </h2>

                  <h1 id="h1">GHC <span> 200 </span> <p> / per Year</p></h1>
                  <div class="list">
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> One time Registration fee of ¢50</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Receive membership ID</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to B2B networking opportunities</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i>  Access to platforms to exhibit your products and services</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i>  Access to information on investment opportunities</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to trade fairs and missions in Ghana and abroad.</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to advertisement slot on the chamber's website and other social media platforms</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i>  Access to Research services and findings on issues of peculiar interest to respective members</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to unlimited Letters of Recommendation from the chamber.</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to long term credit and other forms of financing at discount rates from our selected/partner financial institutions.</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Profiling of business for international market linkages and partnership development.</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to consultancy services, business advisory services, and management services.</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Qualified to be nominated for the Chamber’s Annual Young Entrepreneurs Awards.</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to discounted facilities by the chamber partners (Hotels, Airlines, etc).</p>
                    <hr class="solid">  
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to Practical tailor-made Business Development Services</p>
                    <hr class="solid">
                    <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Other specific Services and activities that may enhance the effectiveness of members business.</p>
                    <hr class="solid">
                  </div>
                 
                  <a style="color: white !important" href="{{ route('registration',$q='Business') }}"><button class="btn btn-success mb-5">Sign up</button></a>
                </div>

                <div class="column roll">
                    {{-- <img  src="b3.png" width="100%"> --}}

                    <h2 id="h">Starters

                        <hr>
    
                        <p>This membership category is open to individual aspiring young entrepreneurs within the age brackets of 18 to 45 years. Target groups are; Students, Aspiring Entrepreneurs, Professionals, e.t.c.</p>
                      </h2>

                      <h1 id="h2">GHC <span> 120 </span> <p> / per Year</p></h1>
                      <div class="list">
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> One time Registration fee of ¢30</p>
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Receive membership ID</p>
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Take part in our Conferences, Workshops, Seminars, Capacity building programs, Networking Opportunities</p>
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i>  Have your views and opinions reach decision makers in the Ghana</p>
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i>  Access to best entrepreneurial practices and advice plus Support to improve and streamline business module</p>
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to grants and funding information.</p>
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to Mentorship opportunity</p>
                        <hr class="solid">
                        <p> <i class="fa  fa-check-square-o" style="font-size:18px"></i> Access to Incubation services</p>
                        <hr class="solid">
                       
                      </div>
                      <a style="color: white !important" href="{{ route('registration',$q='Starter') }}"><button class="btn btn-primary mb-5">Sign up</button></a>

                </div>
              </div>

	</div>

{{-- <script>
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
</script> --}}
</body>
</html>