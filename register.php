<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/registerstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="registerForm">
        <h1 class="registerh1">Register</h1>
        <form class="forminput" method="post">

            <div class="text-input">
                <input type="text" placeholder="First Name" id="firstname" name="txtfirstname">
            </div>

            <div class="text-input">
                <input type="text" placeholder="Last Name" id="lastname" name="txtlastname">
            </div>

            <div class="text-input">
                <input type="text" placeholder="Gender" id="gender" name="txtgender">
            </div>

            <div class="text-input">
                <input type="text" placeholder="Email" id="username" name="txtemail">
            </div>

            <div class="text-input">
                <input type="text" placeholder="Username" id="lastname" name="txtusername">
            </div>

            <div class="text-input">
                <input type="text" placeholder="Password" id="password" name="txtpassword">
            </div>
            
            <button type="submit" class="Register" name="btnRegister">Register</button>

            <p class="login-link" >Already have an account? <a href="login.php">Log in here</a>.</p>
        </form>
        



<?php   
    if(isset($_POST['btnRegister'])){     
        // Retrieve data from form and save the value to a variable
        
        // For tbluserprofile
        $fname = $_POST['txtfirstname'];        
        $lname = $_POST['txtlastname'];
        $gender = $_POST['txtgender'];
        
        // For tbluseraccount
        $email = $_POST['txtemail'];        
        $uname = $_POST['txtusername'];
        $pword = $_POST['txtpassword'];


        $hash_pass = password_hash($pword, PASSWORD_DEFAULT);
        
        // Check if the username already exists in tbluseraccount
        $sql_check_username = "SELECT * FROM tbluseraccount WHERE username='".$uname."'";
        $result_check_username = mysqli_query($connection, $sql_check_username);
        if(mysqli_num_rows($result_check_username) > 0){
            echo '<div class="message-box">Username Already Exist</div>';
        } else {
            $sql_save_profile = "INSERT INTO tbluserprofile (firstname, lastname, gender) VALUES ('".$fname."', '".$lname."', '".$gender."')";
            mysqli_query($connection, $sql_save_profile);
            
            // Save data to tbluseraccount
            $sql_save_account = "INSERT INTO tbluseraccount (emailadd, username, password) VALUES ('".$email."', '".$uname."', '".$hash_pass."')";
            mysqli_query($connection, $sql_save_account);
            echo '<div class="message-box">New record saved.</div>';
        }
    }
?>