<!DOCTYPE html>
<html>
<head>
	<title>Message - GCYE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" sizes="16x16" href="logo.png">
	<link href="auth/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
	<div class="container-fluid body">
		{{-- <div class="row"> --}}
			<div class="col-lg-6 form-block px-4 all">
				<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 ho form-box">
					<div class="text-center mb-1 mt-3">
						<img  src="logo.png" width="150px">
					</div>
					<h4 class="text-center mb-4">
                        {{-- Thank You for Making Payment. <br> Follow the link to Pay yoour first dues and get you login details --}}
						@if (\Session::has('success'))
						<div class="alert alert-success" role="alert">
							<br>
							<p style="text-align: center; text-transform:uppercase ">{{ \Session::get('success') }}</p>
						</div>
						 @endif
					
					</h4>
                   

                    {{-- <div class="mb-3"> 
                        <button type="submit" class="btn btn-success">
                           First Dues Payment
                        </button>
                    </div> --}}
				</div>
			</div>
{{-- 
			 <div class="col-lg-6 d-none d-lg-block image-container">
				<div class="text-center mb-3 mt-5">
					<img style="border: 1px solid black"  src="logo.png" width="150px">
				</div>
			</div>  --}}
		{{-- </div> --}}
	</div>
</body>
</html>