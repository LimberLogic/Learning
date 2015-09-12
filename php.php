<?php include 'library.php' ?><!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<title>Our First Page</title>
	</head>
	<body>
		<?php if($GLOBALS['authenticated']) : ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<p class="alert alert-info"><strong>Info</strong> You are authenticated.</p>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		<?php endif ?>
		
		<!--
			This is an HTML comment.
		-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Factorial</h1>
					<?php /* ?><p><?=factor()?>! = <?=factorial(factor())?></p> <?php */ ?>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<form action="/php.php" method="POST">
						<div class="form-group">
							<label for="name">Name</label>
							<input class="form-control" name="name" id="name"/>
						</div>
						
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password"/>
						</div>
						
						<div class="form-group">
							<label for="select">Gender</label>
							<select class="form-control" name="select" id="select">
								<option value="">-- Select One --</option>
								
								<?php foreach(getGenders() as $id => $gender) : ?>
						
									<option value="<?=$id?>"><?=$gender?></option>
						
								<?php endforeach ?>
							</select>
						</div>
						
						<div class="form-group">
							<input type="submit" class="form-control"/>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<?php if(hasFactor()) : ?>
						<p class="alert alert-success"><strong><?=factor()?>!</strong> = <?=factorial(factor())?></p>
					<?php endif ?>
					
					<form action="/php.php" method="GET">
						<div class="form-group">
							<label for="factor">Factor</label>
							<input class="form-control" name="factor" id="factor" value="<?=factor()?>" placeholder="A positive number, e.g. 15" />
							<p class="help-block">This is what we'll multiply by each descending number to 2.</p>
						</div>
						
						<div class="form-group">
							<input type="submit" value="Calculate!" class="form-control"/>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<?php /* This is a sensitive comment */ ?>
		
		<?php foreach(getArray() as $color) : ?>
			
			<p><?=$color?></p>
			
		<?php endforeach ?>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<p class="alert alert-info"><strong>Info</strong> Page visited: <?=$_SESSION['visits']?> times.</p>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>