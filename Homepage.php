
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> PHRAMACY</title>
	<link rel="stylesheet" href="style.css">
</head>
<style>
    
*{
	padding: 0;
	margin: 0;
}
.wrapper{
	background-size: cover;
	height: 100vh;
}
.navbar{
	position: fixed;
	height: 80px;
	width: 100%;
	top: 0;
	left: 0;
}
.navbar .logo{
	width: 100px;
	height: auto;
	padding: 20px 100px;
}
.navbar ul{
	float: left;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 25px;
	font-family: 'Roboto', sans-serif;
	color: rgb(0, 0, 0);
	padding: 6px 15px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
	background-color: #2194e0;
	border-radius: 2px;
}
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 55%;
	transform: translate(-50%, -50%);
	font-family: sans-serif;
	user-select: none;
}
.center h1{
	color: rgb(14, 13, 13);
	font-size: 70px;
	width: 900px;
	font-weight: bold;
	text-align: center;
}
.center h2{
	color: rgb(5, 5, 5);
	font-size: 40px;
	font-weight: bold;
	margin-top: 10px;
	width: 885px;
	text-align: center;
}
.center .buttons{
	margin: 35px 280px;
}
.buttons .btn2{
	margin-left: 25px;
}
.buttons button:hover{
	background: #cc0000;
}
</style>
<body background="Phramacy2.jpeg"> 
	<div class="wrapper">
			<nav class="navbar">
				<ul>
					<li><a class="active" href="Homepage.php">HOME</a></li>
					<li><a href="aboutus.php">ABOUT</a></li>
					<li><a href="pharmacistregisterform.php">PHARMACIST LOGIN & REGISTRATION</a></li>
					<li><a href="adminlogin.php">ADMIN LOGIN</a></li>
				</ul>
			</nav>
			<div class="center">
			<h1>PHRAMACY</h1>
			<h2>WE PROVIDE OUR BEST SERVICE</h2>
		</div>
		</div>
</body>
</html>