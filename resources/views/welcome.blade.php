<!doctype html>
<html lang="en">
  <head>
  	<title>Início</title>
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
					<h1 class="display-1 text-white">Início</h1>
				</div>
			</div>
			<div class="row justify-content-center">
	            <div class="col form-group">
	                <h2 class="col text-center d-inline-block align-middle text-white"> Cadastre-se </h2>	
	            	<a href="{{ route('signup') }}" class="form-control btn btn-primary submit px-3 btn-work">Sign Up</a>
	            </div>
                <div class="col form-group">
	                <h2 class="col text-center d-inline-block align-middle text-white"> Possui cadastro? </h2>	
                    <a href="{{ route('login') }}" class="form-control btn btn-primary submit px-3 btn-work">Login</a>
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

