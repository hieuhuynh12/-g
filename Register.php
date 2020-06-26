<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style>
        *{
    margin:0px;
    padding:0px;
}
/* header */
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
/* form */
form{
    width: 500px;
    height: 600px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

    </style>
</head>
<body>
    <div data-role="page" id="page5">
    <div id="dau">
		<div class="logo">
			<a href="../index.php"><image src="../images.png", width="300px", height="100px"></image></a>
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
			<a href="#">Register</a>
			<a href="#">login</a>
			<a href="#"><image src="../images.png", width="50px", height="50px"></image></a>
		</div>
    </div>
    <form action="">
        <table>
            <h2>Register</h2>

            <div class="ui-field-contain">
                    <label for="textinput-1">Full Name</label>
                    <input type="text" name="textinput-1" id="textinput-1" placeholder="Your name" value="">
            </div>
            <div class="ui-field-contain">
                    <label for="textinput-1">User Name</label>
                    <input type="text" name="textinput-1" id="textinput-1" placeholder="User name" value="">
            </div>
            <div class="ui-field-contain">
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>Gender</legend>
                        <input type="radio" name="radio-choice-h-1" id="radio-choice-h-1a" value="on" checked="checked">
                        <label for="radio-choice-h-1a">Female</label>
                        <input type="radio" name="radio-choice-h-1" id="radio-choice-h-1b" value="off">
                        <label for="radio-choice-h-1b">Male</label>
                    </fieldset>
            </div>
            <div class="ui-field-contain">
                    <label for="textinput-1">Birthday</label>
                    <input type="Date" name="textinput-1" id="textinput-1" placeholder="" value="">
            </div>
            <div class="ui-field-contain">
                    <label for="textinput-1">Phone number</label>
                    <input type="number" name="textinput-1" id="textinput-1" placeholder="Your number" value="">
            </div>
            <div class="ui-field-contain">
                    <label for="textinput-1">Address</label>
                    <input type="text" name="textinput-1" id="textinput-1" placeholder="Your address" value="">
            </div>
            <div class="ui-field-contain">
                    <label for="textinput-1">Email Address</label>
                    <input type="Email" name="textinput-1" id="textinput-1" placeholder="Your email" value="">
            </div>
            <div class="ui-field-contain">
                    <label for="textinput-1">Password</label>
                    <input type="password" name="textinput-1" id="textinput-1" placeholder="Your Password" value="">
            </div>
            <div class="ui-field-contain">
                    <label for="textinput-1">Enter the password</label>
                    <input type="password" name="textinput-1" id="textinput-1" placeholder="Your Password" value="">
            </div>
            <div class="ui-field-contain">
                    <button type="submit" id="submit-1" class="ui-shadow ui-btn ui-corner-all" style="width:100px; left: 50%;">Submit</button>
            </div>
        </table>
    </form>
    </div>
</body>
</html>