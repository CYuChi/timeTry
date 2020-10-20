<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"></meta>
		<link rel="stylesheet" type="text/css" href="InSys.css">
		<title>國立高雄科技大學公文整合系統</title>
		<style type="text/css">
        .selectOP{
            font-size:100% ; padding: 0.3% ; font-family: Microsoft JhengHei 
        }
        .selectSHOW{
            position: relative; top: -80px  ; left: 44% ; font-size:50% ; padding: 0.3% ; font-family: Microsoft JhengHei ;
        }
        .content{
            position: relative; top: -80px;
            width:1000px ; margin-left:auto ; margin-right: auto;
        }
        .box{
            width: 280px; padding: 10px; margin: 10px; background-color: rgb(248, 228, 164);
            display: inline-block; vertical-align: top; 
            text-align: center; height: 100px; line-height:100px;
            font-family: Microsoft JhengHei ; font-size:200%;
        }
		</style>
	</head>

	<body style="margin: 0; font-family: Microsoft JhengHei;">
		<h1>
            <img src="https://www.nkust.edu.tw/var/file/0/1000/img/513/182513897.png" width="30%" height="30%"><br>
            公文整合系統
		</h1>
        <p>歡迎，XX處XX組OO，登入系統</p>

        <form>
            <select class="selectSHOW" name="Your Services">
                <option class="selectOP" value="General Services">總務處</option>
                <option class="selectOP" value="Academic Office">教務處</option>
                <option class="selectOP" value="Academic Affairs Office">學務處</option>
                <option class="selectOP" value="International Affairs Office">國際事務處</option>
            </select>
        </form>

        <div class="content">
            <div class="box">
                <a href="InSys.html">上傳文件</a>
            </div>
            <div class="box">
                <a href="InSys.html">查詢文件</a>
            </div>
            <div class="box">
                <a href="InSys.html">文件總覽</a>
            </div>
        </div>
        


        
    </body>
</html>