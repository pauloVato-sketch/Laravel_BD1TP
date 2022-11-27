<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/bootstrap-5.2.2/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg3.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Sign Up</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
		      	<form method="POST" action="/signup/" class="signin-form">
                    @csrf
                    <div class="form-group">
		      			<input name="name" type="text"  class="form-control" placeholder="Name" required>
		      		</div>
		      		<div class="form-group">
		      			<input name="username" type="text"  class="form-control" placeholder="Username" required>
		      		</div>
                    <div class="form-group">
                    <input name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                    </div>
                </form>
		        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

