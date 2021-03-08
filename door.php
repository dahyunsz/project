<?php
	include "connect.php";
	session_start();
	// ตรวจสอบว่ามีชือใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
	if (empty($_SESSION["username"]) ) {
		header("location: login.php");
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.php" type="text/css">
    <title>Project - door</title>
</head>
<body>
	<div id="clearance">&nbsp;</div>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<?php include 'component/logo.php';?>
			</div>
			<ul class="navigation">
				<?php include 'component/navbar.php';?>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>DOOR</h2>
					<br>
					<div class="box">
						<img src="images/doorpicture.jpg" alt="Img" height="250" width="250">
					</div>
				</div>
				<div>
					<h2>Detail</h2>
					<p>
						“example example example example example example example example example example example example
						”<br> <span>- detail_of_door -</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>ประวัติการ log in เข้าใช้ประตู</h1>
				<div class="section">
					<h2>History</h2>
					<ul>
						<li>
							<p><a class="more">ตรวจสอบ</a>10/25/2020 at 12:00 pm <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>10/25/2020 at 18:00 pm <a style="color:green">login</a> user1</p>
							<p><a class="more">ตรวจสอบ</a>11/25/2020 at 12:00 am <a style="color:green">login</a> user2</p>
							<p><a class="more">ตรวจสอบ</a>11/25/2020 at 20:00 am <a style="color:green">login</a> user3</p>
							<p><a class="more">ตรวจสอบ</a>12/25/2020 at 12:00 pm <a style="color:green">login</a> user4</p>
							<p><a class="more">ตรวจสอบ</a>12/25/2020 at 18:00 pm <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>13/25/2020 at 12:00 am <a style="color:green">login</a> user5</p>
							<p><a class="more">ตรวจสอบ</a>13/25/2020 at 20:00 am <a style="color:green">login</a> user6</p>
							<p><a class="more">ตรวจสอบ</a>14/25/2020 at 12:00 pm <a style="color:green">login</a> user7</p>
							<p><a class="more">ตรวจสอบ</a>14/25/2020 at 18:00 pm <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>15/25/2020 at 12:00 am <a style="color:green">login</a> user8</p>
							<p><a class="more">ตรวจสอบ</a>15/25/2020 at 20:00 am <a style="color:green">login</a> user9</p>
							<p><a class="more">ตรวจสอบ</a>16/25/2020 at 12:00 am <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>17/25/2020 at 20:00 am <a style="color:green">login</a> user10</p>
							<p><a class="more">ตรวจสอบ</a>14/25/2020 at 12:00 pm <a style="color:green">login</a> user11</p>
							<p><a class="more">ตรวจสอบ</a>14/25/2020 at 18:00 pm <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>15/25/2020 at 12:00 am <a style="color:green">login</a> user12</p>
							<p><a class="more">ตรวจสอบ</a>15/25/2020 at 20:00 am <a style="color:green">login</a> user13</p>
							<p><a class="more">ตรวจสอบ</a>16/25/2020 at 12:00 am <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>17/25/2020 at 20:00 am <a style="color:green">login</a> user14</p>
							<p><a class="more">ตรวจสอบ</a>14/25/2020 at 12:00 pm <a style="color:green">login</a> user15</p>
							<p><a class="more">ตรวจสอบ</a>14/25/2020 at 18:00 pm <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>15/25/2020 at 12:00 am <a style="color:green">login</a> user16</p>
							<p><a class="more">ตรวจสอบ</a>15/25/2020 at 20:00 am <a style="color:green">login</a> user17</p>
							<p><a class="more">ตรวจสอบ</a>16/25/2020 at 12:00 am <a style="color:red">login</a> unknow</p>
							<p><a class="more">ตรวจสอบ</a>17/25/2020 at 20:00 am <a style="color:green">login</a> user18 </p>
						</li>
					</ul>
				</div>
			
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
</body>

</html>