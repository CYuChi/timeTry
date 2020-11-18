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
            .weather_info{
                width:50%;
                margin:10;
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
        <div class="weather_info">

            <table class="table table-dark" >
                <thead>
                    <tr>
                        <th scope="col" colspan="5" style="font-size: 20px">今日天氣預測</th>
                    </tr>
                </thead>
                <tbody>
                {{-- table1 --}}
                <tr>
                @foreach ($weather_1 as $num_1)
                    <td scope="row" colspan="2" width=100%>{{$num_1->city}}</td>
                @endforeach
                </tr>

                <tr>
                    @foreach ($weather_1 as $num_1)
                        <td width=100%> 白天   </td>
                        <td width=100%> 夜晚   </td>
                    @endforeach
                </tr> 

                <tr>
                @foreach ($weather_1 as $num_1)
                    <td width=100%>    {{$num_1->day}}</td>
                    <td width=100%>    {{$num_1->night}}</td>
                @endforeach
                </tr>
                
                <tr>
                    @foreach ($weather_2 as $num_2)
                        <td width=100%>    {{$num_2->tmp}}</td>
                    @endforeach
                </tr> 

                {{-- table2 --}}
                <tr>
                    @foreach ($weather_1 as $num_1)
                        <td scope="row" colspan="2" width=100%>{{$num_1->city}}</td>
                    @endforeach
                    </tr>
    
                    <tr>
                        @foreach ($weather_1 as $num_1)
                            <td width=100%> 白天   </td>
                            <td width=100%> 夜晚   </td>
                        @endforeach
                    </tr> 
    
                    <tr>
                    @foreach ($weather_1 as $num_1)
                        <td width=100%>    {{$num_1->day}}</td>
                        <td width=100%>    {{$num_1->night}}</td>
                    @endforeach
                    </tr>
                    
                    <tr>
                        @foreach ($weather_2 as $num_2)
                            <td width=100%>    {{$num_2->tmp}}</td>
                        @endforeach
                    </tr> 
                </tbody>
            </table>    
        </div>
		<div class="try">
			{{--  @include('includes.footer')  --}}
		</div>
	</body>
	
</html>

    