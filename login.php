<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	 <style>
		 *{
    font-family: "montserrat",sans-serif;
  }
  body{
    margin: 0;
    padding: 0;
    background: #333;
  }
  .login-box{
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(45deg,#9fbaa8,#31354c);
    transition: 1s;
  }
  .login-form{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: white;
    text-align: center;
  }
  .login-form h1{
    font-weight: 400;
    margin-top: 0;
  }
  .txtb{
    display: block;
    box-sizing: border-box;
    width: 240px;
    background: #ffffff28;
    border: 1px solid white;
    padding: 10px 20px;
    color: white;
    outline: none;
    margin: 10px 0;
    border-radius: 6px;
    text-align: center;
  }
  .login-btn{
    width: 240px;
    background: #2c3e50;
    border: 0;
    color: white;
    padding: 10px;
    border-radius: 6px;
    cursor: pointer;
  }
	 </style>
  </head>
  <body>

    <?php
	//Gọi file connection.php ở bài trước
	require_once("config.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: admin.php');
			}
		}
	}
?>

    <form class="login-form" action="login.php" method="post">

      <h1>Welcome</h1>
      <input class="txtb" type="text" name="" placeholder="Username">
      <input class="txtb" type="password" name="" placeholder="Password">
      <input class="login-btn" type="submit" name="" value="Login">
    </form>
    </div>
    
  </body>
</html>