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
	<div class="container-fluid body">
            
			<div class="col-lg-8 form-block all2">

				<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 ho form-box mt-2 mb-2">
                    <a href="/Register" class="float"><i class="fa fa-arrow-left"></i></a>
                    <div class="text-center pt-3 ">
						<img  src="logo.png" width="150px">
                        <hr>
					</div>
                        
					<h4 class="text-center">
						GCYE <strong> {{ $choice }}</strong> 
                         MEMBER REGISTRATION FORM
                        <hr>
					</h4>
                    
					<form action="{{ route('member.store') }}" method="POST" class="form-wrapper align-items-center" autocomplete="off">
						@csrf
                        <div id="msform">
                            <div>
                                @if(Session::has('errors'))
                                    <div class="alert text-center alert-dismissable alert-danger">
                                        {{ Session::get('errors')->first()}}
                                    </div>
                                @endif
                            </div>
                            
                            <fieldset class="row">

                                <div class="col-xl-6 col-lg-6 col-12 form-input" style="display: none">
                                    <label>Reg type</label>
                                    <input  type="text" name="type"  value="{{ $choice }}"/>
                                </div>
                                
                                <div class="col-xl-12 col-lg-6 col-12 form-input">
                                    <label>Full Name <b>*</b></label>
                                    <input  type="text" name="name" class="{{($errors->first('name') ? " form-error" : "")}}"/>
                                 
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Gender <b>*</b></label>
                                    <br>
                                    <select class="select" name="gender" >
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Date of Birth <b>*</b></label>
                                    <input id="date" type="text" name="dob" class="{{($errors->first('dob') ? " form-error" : "")}}" />
                                   
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Designation/Position <b>*</b></label>
                                    <input   type="text" name="position" class="{{($errors->first('position') ? " form-error" : "")}}" />
                                
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Email (Most Active) <b>*</b></label>
                                    <input  type="email" name="email" class="{{($errors->first('email') ? " form-error" : "")}}"  />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label >Phone (Most Active) <b>*</b></label>
                                    <input   type="text" name="phone" class="{{($errors->first('phone') ? " form-error" : "")}}"  />
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 form-input">
                                    <label>Region <b>*</b></label>
                                    <br>
                                <select name="region" class="select" required="required" aria-required="true">
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
                                <div class="col-xl-6 col-lg-6 col-12 mt-3 form-input" >
                                <button type="submit" name="submit" class="submit action-button" style="border-radius:20px ">submit </button>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-12 mt-3 form-input" >

                                <div class="text-center mb-3">
                                    Have an account?
                                </div>
                                <div class="text-center mb-2 pb-2">
                                    <a class="register-link btn btn-success" href="/login"> Login </a>
                                </div>
                                </div>
                            </fieldset>


                          </div>
         
					</form>
				</div>
			</div>

	</div>
<script>
var date = document.getElementById('date');

function checkValue(str, max) {
  if (str.charAt(0) !== '0' || str == '00') {
    var num = parseInt(str);
    if (isNaN(num) || num <= 0 || num > max) num = 1;
    str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
  };
  return str;
};

date.addEventListener('input', function(e) {
  this.type = 'text';

//   to limit year to 12 yeaars younger than today
    var today = new Date();
    var yyyy = today.getFullYear();
    maximum = yyyy - 18;

  var input = this.value;
  if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
  var values = input.split('/').map(function(v) {
    return v.replace(/\D/g, '')
  });
  if (values[0]) values[0] = checkValue(values[0], 31);
  if (values[1]) values[1] = checkValue(values[1], 12);
  if (values[2]) values[2] = checkValue(values[2], maximum);
  var output = values.map(function(v, i) {
    return v.length == 2 && i < 2 ? v + '/' : v;
  });
  this.value = output.join('').substr(0, 14);
});
console.log(date);



date.addEventListener('blur', function(e) {
  this.type = 'text';
  var input = this.value;
  var values = input.split('/').map(function(v, i) {
    return v.replace(/\D/g, '')
  });
  var output = '';
  
  if (values.length == 3) {
    var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
    var month = parseInt(values[0]) - 1;
    var day = parseInt(values[1]);
    var d = new Date(year,month,day);
    if (!isNaN(d)) {
      document.getElementById('result').innerText = d.toString();
      var dates = [d.getDate() + 1, d.getMonth(), d.getFullYear()];
      output = dates.map(function(v) {
        v = v.toString();
        return v.length == 1 ? '0' + v : v;
      }).join('/');
    };
  };
  this.value = output;
});

</script>
</body>
</html>