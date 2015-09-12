<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<title><?=$GLOBALS['title']?> :: Limber Logic Learning</title>
	</head>
	<body>
		<?php if($GLOBALS['success']) : ?>
			<div class="fluid-container">
				<div class="row">
					<div class="col-xs-12">
						<p class="alert alert-success"><strong>Info</strong> Information received!</p>
					</div>
				</div>
			</div>
		<?php endif ?>
		
		<?php if($GLOBALS['error']) : ?>
			<div class="fluid-container">
				<div class="row">
					<div class="col-xs-12">
						<p class="alert alert-danger"><strong>Error</strong> Duplicate email address, you sneaky hacker you!</p>
					</div>
				</div>
			</div>
		<?php endif ?>
		
		<div class="fluid-container">
			<div class="row">
				<div class="col-xs-12">
					<h1>MVC Application</h1>
					<p>This is an MVC application, albeit a simple one.</p>
				</div>
			</div>
		</div>
		
		<div class="fluid-container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Enter your information:</h1>
					<form action="controller.php" method="post">
						<input type="hidden" name="submitted" value="1"/>
						
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email"/>
						</div>
						
						<div class="form-group">
							<label for="fname">First Name</label>
							<input class="form-control" name="fname" id="fname"/>
						</div>
						
						<div class="form-group">
							<label for="lname">Last Name</label>
							<input class="form-control" name="lname" id="fname"/>
						</div>
						
						<div class="form-group">
							<label for="age">Age</label>
							<input class="form-control" name="age" id="age"/>
						</div>
						
						<div class="form-group">
							<input type="submit" class="form-control btn btn-primary" value="Submit"/>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>