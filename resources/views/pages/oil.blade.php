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
            .oil_info{
                width:70%;
                margin:10 auto;
            }
            td{
                text-align: center;
            }
            tr{
                text-align: center;
            }
		</style>
	</head>

  	<body>
        @include('includes.bst_footer')
		@include('includes.menu')
        <div class="oil_info">

            <table class="table table-dark" >
                @foreach ($oil_1 as $num_1)
                    @foreach ($oil_2 as $num_2)
                        <thead>
                            <tr>
                                <th scope="col" style="font-size: 20px">#</th>
                                <th></th>
                                <th scope="col" style="font-size: 20px">油價查詢</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td scope="row" rowspan="4">台塑石化</td><td> 98無鉛汽油 </td><td> {{$num_1 -> ne_oil_price }} </td><td> {{$num_1 -> oil_unit }} </td><td scope="row" rowspan="4">{{$num_1 -> oil_time }} 開始施行</td></tr>
                                <tr><td>95無鉛汽油</td><td> {{$num_1 -> nf_oil_price }} </td><td> {{$num_1 -> oil_unit }} </td></tr>
                                <tr><td>92無鉛汽油</td><td> {{$num_1 -> nt_oil_price }} </td><td> {{$num_1 -> oil_unit }}</td></tr>
                                <tr><td>超(高)級汽油</td><td> {{$num_1 -> sp_oil_price }} </td><td> {{$num_1 -> oil_unit }} </td>    
                            </tr>
                            <tr>
                                <td scope="row" rowspan="4">台灣中油</td><td> 98無鉛汽油 </td><td> {{$num_2 -> ne_oil_price }} </td><td> {{$num_2 -> oil_unit }} </td><td scope="row" rowspan="4">{{$num_2 -> oil_time }} 開始施行</td></tr>
                                <tr><td>95無鉛汽油</td><td> {{$num_2 -> nf_oil_price }} </td><td> {{$num_2 -> oil_unit }} </td></tr>
                                <tr><td>92無鉛汽油</td><td> {{$num_2 -> nt_oil_price }} </td><td> {{$num_2 -> oil_unit }}</td></tr>
                                <tr><td>超(高)級汽油</td><td> {{$num_2 -> sp_oil_price }} </td><td> {{$num_2 -> oil_unit }} </td>    
                            </tr>
                            
                        </tbody>
            </table>
                    @endforeach
                @endforeach
        </div>
		<div class="try">
			{{--  @include('includes.footer')  --}}
		</div>
	</body>
	
</html>

    