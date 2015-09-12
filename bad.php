<!DOCTYPE html>

<?php
	$var = 1.2;
	
	function getNumber() {
		return 1.0 * 8;
	}
?>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<title>What a Bad Page Looks Like</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>What a Bad Page Looks Like</h1>
					<p>Var is: <?php
						echo $var;
						?></p>
				</div>
			</div>
			
			<?php if($var >= 1.0) { ?>
				<div class="row">
					<div class="col-md-12">
						<h1>Var is greater than 1.0</h1>
					</div>
				</div>
			<?php } ?>
			
			<div class="row">
				<div class="col-md-12">
					<h1>getNumber returned: <?php
						echo getNumber();
						?></h1>
				</div>
			</div>
		</div>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>