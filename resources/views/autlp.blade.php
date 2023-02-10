<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ 'css/style.css' }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<div class="hana">

    <img src="https://www.kitkat.co.uk/themes/custom/kitkat_master/dist/assets/img/finger-mix.svg" alt="" >
</div>


@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="{{ route('sample.validate_registrationlp') }}" method="POST">
            @csrf
			<h1>Create Account</h1>
			<div class="social-container">
				{{-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a> --}}
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				{{-- <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> --}}
			</div>
			<span>or use your email for registration</span>

            <div>
                <input type="text" name="name" class="form-control" placeholder="Name" />
                @if($errors->has('name'))
                    <span>{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div>
                <input type="text" name="email" class="form-control" placeholder="Email Address" />
                @if($errors->has('email'))
                    <span>{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" />
                @if($errors->has('password'))
                    <span>{{ $errors->first('password') }}</span>
                @endif
            </div>

			<button type="submit">Register</button>
		</form>
	</div>


	<div class="form-container sign-in-container">
        <form action="{{ route('sample.validate_loginlp') }}" method="post">
            @csrf
			<h1>Sign in</h1>
			<div class="social-container">
				{{-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a> --}}
				<a href="/auth/google" class="social"><i class="fab fa-google-plus-g"></i></a>
				{{-- <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> --}}
			</div>
			<span>or use your account</span>
			<div class="form-group mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email" />
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" />
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Login</button>
            </div>
		</form>
	</div>

    





    
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <img src="gbr.png" alt="" width="50px" style="margin-top: -10px; margin-bottom: 10px;">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
                <img src="gbr.png" alt="" width="50px" style="margin-top: -10px; margin-bottom: 10px;">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script src="script1.js"></script>
</body>
</html>