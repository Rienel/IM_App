<?php
    include 'connect.php';
    // require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/loginstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Log in</h1>
    <div class="loginForm">
        <form method="post">
            <div class="text-input">
                <label for="username">Username</label>
                <input type="text" placeholder="Username" id="username" name="txtusername">
            </div>
            <div class="text-input">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password" name="txtpassword">
            </div>
            <div class="password-option">
                <label for="remember-password"><input type="checkbox" id="remember-password">    Remember me</label>
                <a>Forgot password?</a>
            </div>
            <div class="login-button">
                <button type="submit"  name="btnLogin">Log In</button>
            </div>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>


<?php	
	if(isset($_POST['btnLogin'])){
		$uname=$_POST['txtusername'];
		$pwd=$_POST['txtpassword'];
		//check tbluseraccount if username is existing
		$sql ="Select * from tbluseraccount where username='".$uname."'";
		
		$result = mysqli_query($connection,$sql);	
		
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		
		if($count== 0){
			echo '<div class="message-box">Username doesnt exist</div>';
		}else if(password_verify($pwd, $row[3])) {
			echo '<div class="message-box">Incorrect Password</div>';
		}else{
			$_SESSION['username']=$row[0];
			header("location: page.php");
		}
	}
?>

<!-- <?php require_once 'includes/footer.php'; ?> -->