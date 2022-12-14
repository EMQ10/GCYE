<!DOCTYPE html>
<html>
<head>
	<title>Login - GCYE</title>
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
			<div class="col-lg-6 form-block px-4 all">
				<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 ho form-box">
					<div class="text-center mb-1 mt-3">
						<img  src="logo.png" width="150px">
					</div>

					<h4 class="text-center mb-4">
						Login into account
					</h4>
					<div>
						@if(Session::has('errors'))
							<div class="alert text-center alert-dismissable alert-danger">
								{{ Session::get('errors')->first()}}
							</div>
						@endif
					</div>
					<form action="{{ route('login') }}" method="POST" class="form-wrapper align-items-center" autocomplete="off">
						@csrf
						<div class="form-input">
							<span><i class="fa fa-id-badge"></i></span>
							<input type="text" name="login" placeholder="Member ID" maxlength="12"required>
						</div>
						
						<div class="form-input">
							<span><i class="fa fa-key"></i></span>
							<input type="password" name="password" placeholder="Password" required>
						</div>

							
						<div class="mb-3 d-flex align-items-center">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="cb1">
								<label class="custom-control-label" for="cb1">Remember me</label>
							</div>
						</div>

						<div class="mb-3"> 
							<button type="submit" class="btn btn-block">
								Login
							</button>
						</div>

						<div class="text-right mb-3">
							<a href="reset.html" class="forget-link">
								Forgot password?
							</a>
						</div>

						<div class="text-center mb-3">
							Don't have an account?
						</div>
						
					</form>
						 
					<div class="text-center mb-2 pb-2">
						<a class="register-link" href="/Register"> <button class="btn btn-success"> Register</button></a>
					</div>
				</div>
			</div>

	</div>
</body>
</html>