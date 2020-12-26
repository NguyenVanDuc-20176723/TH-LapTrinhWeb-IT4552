@extends('master')

@section('title','log-in')

@section('content')

		
	<!-- Primary Page Layout
	================================================== -->
		<div class="section background-dark over-hide">
			<div class="form-center-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-8 col-sm-6">							
							<div class="login">
								<h1 class="text-center mb-4">Login</h1>
								<div class="login-input">
									<input type="text" id="email" required>
									<label for="email">Email</label>
								</div>

								<div class="login-input">
									<input type="Password" id="password" required>
									<label for="password">Password</label>
								</div>
									
								<div class="text-center col-6  col-sm-4 col-lg-12 mb-4">
									<a class="login-button" href="">Login</a>
								</div>

								<div  class="text-center col-6 col-sm-4 col-lg-12 mb-3">
									<a class="account-help" href="">Forgot password</a> |
									<a class="account-help" href="{{route('register')}}">Create a new account</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		

			<div class="slideshow">
				<div class="slide">
					<figure class="slide__figure">
						<div class="slide__figure-inner">
							<div class="slide__figure-img" style="background-image: url(source/images/home-background.jpg)"></div>
						</div>
					</figure>
				</div>
			</div>
		</div>

   


    <!-- JAVASCRIPT
    	=================================== -->

    	<!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/plugins.js"></script>	
	<script src="js/custom.js"></script> 
@endsection