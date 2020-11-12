<html>
  	<head>
		<title>贏在起跑點!</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" type="text/css" href="css/LogIN.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title>@yield('title')</title>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		<style>
			body {
				background-image: url('/includes/background.jpg');
				background-size: cover;
			}
			.try{
				position: absolute;
				bottom: 0;
				width: 100%;
			}

		</style>
	</head>

  	<body>
		@include('includes.bst_footer')
		@include('includes.menu')

		<div class="container">
			
			
		</div>
		<div class="try">
			{{--  @include('includes.footer')  --}}
		</div>
	</body>
	
</html>