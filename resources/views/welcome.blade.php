<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

<div class="container">
		<div class="row">
			<div class="mx-auto mt-5">
				<div class="col-md">
					<div class="card card-body">
						<h3 class="card-title">User Login...</h3>
						<form action="{{ url('/login-user') }}" class="px-4 py-3" method="POST">
                            @csrf
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="email" class="form-control" name="email" placeholder="email@example.com" required="">
							</div>
							<div class="form-group">
								<label for="pass">Password</label>
								<input type="password" class="form-control" name="pass" placeholder="password" required="">
							</div>
							<input type="submit" name="login" class="btn btn-primary" value="Log In">
                            @if (session()->has('error'))
                                <span class="text-danger">
                                    {{ session()->get('error') }}
                                </span>
                            @endif
						</form>
						<div class="dropdown-divider"></div>
						<a href="signup.php" class="dropdown-item">New account here? Sign up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- <script type="text/javascript" src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script> --}}
</body>
</html>
