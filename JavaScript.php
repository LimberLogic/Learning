<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<title>Limber Logic Learning :: JavaScript Intro</title>
	</head>
	<body>
		<div class="fluid-container">
			<h1>JavaScript Test</h1>
			<p>This page will be used to demonstrate JavaScript, starting with basic DOM manipulation to using frameworks like jQuery and AngularJS.</p>
			<p id="js">This is going to change.</p>
		</div>
		
		<a id="reload" href="#" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-refresh"></span> Reload Data</a>
		
		<table class="table table-hover table-stripe">
			<thead>
				<tr>
					<th>Email</th>
					<th>Name</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody id="ajax">
				
			</tbody>
		</table>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="Intro.js"></script>
	</body>
</html>