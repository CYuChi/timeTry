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
            .invoice_info{
                width:60%;
                margin: 10 auto;
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
        <div class="invoice_info">

            <table class="table table-dark" >
                @foreach ($invoice as $num)
                    <thead>
                        <tr>
                        <th scope="col" style="font-size: 20px">#</th>
                        <th scope="col" style="font-size: 20px">發票中獎號碼</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td scope="row" rowspan="2">特別獎</td><td> {{$num -> best}} </td></tr>
                            <tr><td>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td>
                        </tr>

                        <tr>
                            <td scope="row" rowspan="2">特獎</td><td> {{$num -> special}} </td></tr>
                            <tr><td>同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</td>
                        </tr>
                        <tr>
                            <td scope="row" rowspan="2">頭獎</td><td> {{$num -> first}}、{{$num -> second}}、{{$num -> third}}</td></tr>
                            <tr><td>同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</td>
                        </tr>
                        <tr>
                            <td scope="row">二獎</td>
                            <td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
                        </tr>
                        <tr>
                            <td scope="row">三獎</td>
                            <td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
                        </tr>
                        <tr>
                            <td scope="row">四獎</td>
                            <td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
                        </tr>
                        <tr>
                            <td scope="row">五獎</td>
                            <td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
                        </tr>
                        <tr>
                            <td scope="row">六獎</td>
                            <td>同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td>
                        </tr>
                        <tr>
                            <td scope="row">增開六獎</td>
                            <td>{{$num -> extra}}</td>
                        </tr>
                    </tbody>
            </table>
                @endforeach
        </div>
		<div class="try">
			{{--  @include('includes.footer')  --}}
		</div>
	</body>
	
</html>

    