<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
	</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<style>
		
*{
    margin:0px;
    padding:0px;
}
.container{
	width: 1550px;
	margin: auto;
}
/* header */
.container h2{
    text-align: center;
}
#dau{
    width: 100%;    
    height: 100px;
}
.logo{
    width: 300px;
    height: 100px;
    float: left;
}
.menu{
    width: 600px;
    height: 100px;
    float: left;
}
.box{
    width: 200px;
    height: 80px;
    float: left;
    margin-top: 20px;
}
.login{
    float: left;
    margin-left: 100px;
    text-align: center;
    width: 300px;
    height: 100px;
}
.login a{
    width: 100px;
}
.menu ul{
    list-style-type: none;
    text-align: center;
}
.menu ul li{
    display: inline-table;
    width: 100px;
    height: 100px;
    line-height: 100px;
}
/* content */
.slice{
    position: relative;
    width: 800px;
    float: left;
}
.slice .left{
	width: 300px;
	position: absolute;
	left: 75px;
	top: 210px;
}
.left{
    margin-top: 110px;
}
.btn{
	padding: 15px 55px;
	background-color: #758dba;
	border-radius: 30px;
	color: #fff;
	font-size: 18px;
	text-transform: uppercase;
	cursor: pointer;
	border: none;
	margin-top: 20px;
}
.btn:hover{
	background-color: #464444;
}
/* FOOTER */
.about{
	width: 400px;
	float: left;
}
.about #trai{
	width: 70px;
	height: 38px;
	margin-top: 15px;
	margin-right: 20px;
	float: left;
}
.about #phai{
	font-size: 15px;
	width: 245px;
	color: #6C6666;
	float: left;
}
.contact{
	width: 300px;
	float: left;
}
.contact p{
	font-size: 16px;
	margin-top: 10px;
	color: #6C6666;
}
.contact span{
	font-size: 20px;
	font-weight: bold;
}
.link{
	width: 500px;
	float: left;
}
.link p{
	font-size: 16px;
	margin-top: 45px;
	color: #6C6666;
}

	</style>
</head>
<body>	
	<div class="container">
		<div id="dau">
			<div class="logo">
				<a href="#"><image src="..\logo1.png", width="300px", height="100px"></image></a>
			</div>
			<div class="menu">
				<ul>
					<li>
						<a  href="#">News</a>						
					</li>
					<li>
						<a  href="#">Categories</a>						
					</li>
					<li>
						<a  href="#">Product</a>				
					</li>
					<li>
						<a  href="#">Age</a>						
					</li>
				</ul>
			</div>
			<div class="box">
				<span class="icon"><i class="fa fa-search"></i></span>
				<input type="search" id="search" placeholder="Search..." />
			</div>
			<div class="login">
				<a href="../Register.php">Register</a>
				<a href="../login.php">login</a>
				<a href="#"><image src="../images.png", width="50px", height="50px"></image></a>
			</div>
		</div>
		<div class="content">
			<h2>NEW DAY NEWSLETTERS</h2>
			<div class="slice">
				<img src="..\content1.png" width="1000px", height="600px" alt="">
				<div class="left">
					<h1>Find tips and at-home <br aria-hidden="true"> activities at the <br aria-hidden="true"> Mattel Playroom!</h1>
					<button class="btn">Learn more</button>
				</div>
			</div>
			<div class="right1">
				<a href="#"><img src="..\right1.png" width="700px", height="300px" alt=""></a>
			</div>
			<div class="right2">
				<a href="#"><img src="..\right2.png" width="700px", height="300px" alt=""></a>
			</div>
			<h2>CATEGORIES</h2>
			<div class="mh">
				<a href=""><img src="..\mh1.jpg" width="300px" alt=""></a>
				<a href=""><img src="..\mh2.jpg" width="300px" alt=""></a>
				<a href=""><img src="..\mh3.jpg" width="300px" alt=""></a>
				<a href=""><img src="..\mh4.jpg" width="300px" alt=""></a>
				<a href=""><img src="..\mh5.png" width="300px" alt=""></a>
			</div>
		</div>
		<div class="footer">
			<div class="about">
				<h2>About Us</h2>
				<a id="trai" href="../index.php"><img src="..\logo1.png" width="50px" height="50" alt=""></a>
				<p id="phai">Tự tin sống trọn tuổi trẻ!</p>
			</div>
			<div class="contact">
				<h2>Contacts</h2>
				<p><span>Emai:</span> trungvu027@gmail.com</p>
				<p><span>Tel:</span>19009999</p>
			</div>
			<div class="link">
				<p>trungvu &copy; All Right Reserved</p>
			</div>
		</div>
	</div>
</body>
</html>