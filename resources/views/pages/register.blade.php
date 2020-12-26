@extends('master')

@section('title','register')

@section('content')

		
	<!-- Primary Page Layout
	================================================== -->
		<div class="section background-dark over-hide">
			<div class="form-center-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-8 col-sm-6">
							<div class="login">
								<form action="{{route('sign-up')}}" method="POST">
									@csrf
									<h1 class="text-center">Register</h1>
								
									<div class="login-input">
										<input type="text" id="username" name="username" required>
										<label for="username">Name</label>
									</div>

									<div class="login-input">
										<input type="text" id="email" name="email" required>
										<label for="email">Email</label>
									</div>

									<div class="login-input">
										<input type="Password" id="password" name="password" required>
										<label for="password">Password</label>
									</div>

									<div class="login-input">
										<input type="Password" id="comfirm-password" name="re-password" required>
										<label for="comfirm-password">Comfirm password</label>
									</div>

									<div class="login-input">
										<input type="text" id="phone-number" name="phone" required>
										<label for="phone-number">Phone number</label>
									</div>

											
									<div class="text-center col-6  col-sm-4 col-lg-12 mb-4">
										<button class="login-button" type="submit">Register</button>
									</div>
								</form>
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