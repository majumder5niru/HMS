<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap.min.css') !!}" style="">
	    <style>
	    .container.nav {
				padding-top: 19px;
			}
		</style>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    

	    <link href="{!! asset('css/datepicker.css') !!}" rel="stylesheet">
	    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
	    <style>
		 	
		 	.form-control{
		 		width:100%;
		 	}
		 	
		 	.allLabel{
		 		color:#009999;
		 	}
		 	
			.btn-primary{
				width:100%;
			}
			
			
			h2 {
    			color: #008000;
    			font-family: Comic Sans MS;
			}
			h3 {
  				color: #7d8e51;
  				font-family: Comic Sans MS;
			}
			
			.col-md-4  {
  				line-height: 8px;
			}
			button {
 			 height: 30px;
			}	
			.msg{
				color:red;
			}
			.container{
				height: 10%;
				height:100hv;
			}
			body{
				height: 100%;
				height:100hv;
			}
			
			#date{
				width:100%;
				}
			.input-group.input-append.date {
		  		width: 100%;
			}
			.pl0{
				padding-left: 0px;
			}
			.pr0{
				padding-right: 0px;
			}
			.navbar-default {
			    background-color: #099;
			    border-color: #E7E7E7;
		   }
		   .navbar-default .navbar-nav > li > a {
			    color: #FFF;
			    font-weight: bold;
			}
			.navbar-default .navbar-nav > li > a:hover{
			    color: #B7FBFB;

			}
			.btn-primary{
				background:#099;
			}
			.btn-primary:hover , .btn-primary:focus , .btn-primary:active {
				background:#099 !important;
			}
		</style>
	    <script>
		    $(function(){
		        $('#datePicker')
		            .datepicker({
		            format: 'yyyy/mm/dd'
		        })
		    });
	    </script>
	     <script>
		    $(function(){
		        $('#datePicker1')
		            .datepicker({
		            format: 'yyyy/mm/dd'
		        })
		    });
	    </script>
	    <script>
			function myFunction() {
    		window.print();
			}
		</script>
		<script>
            function check(){
                return confirm('Are you sure you want to delete this doctors history?');
            }
        </script>

	</head>
	<body style="background-color:rgba(242, 253, 255, 0.36);">
		

	</body>
	
</html>