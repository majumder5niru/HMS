<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="{!! asset('js/jquery-1.11.3.min.js') !!}"></script>
	    <script src="{!! asset('js/search.js') !!}"></script>
	    <!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
	    <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}">
	</head>
	<body>
		<div class="container">
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" id="search-input" class="form-control" placeholder="search">
				</div>
				<div class="col-md-12" id="search-results">
					
				</div>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</body>
</html>