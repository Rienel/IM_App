<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/registerstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Playlist</title>
</head>
<body>

    <h1 class="registerh1">Register</h1>

    <div class="navbar">
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li>About Us</li>
                <li>Contact Us</li>
            </ul>
        </nav>
    </div>

    <div class="loginForm">
        <form class="forminput" method="post">
            <div class="text-input">
                <label for="username">Playlist Name</label>
                <input type="text" placeholder="Username" id="playlistname" name="txtPlaylistName">
            </div>
            <div class="login-button">
                <button type="submit" name="btnAdd">Add Playlist</button>
            </div>
        </form>
        



<?php   
    if(isset($_POST['btnAdd'])){
        
        $Pname = $_POST['txtPlaylistName'];
        
        $sql_save_profile = "INSERT INTO tblplaylistdashboard (playlistname) VALUES ('".$Pname."')";
        mysqli_query($connection, $sql_save_profile);
        echo '<div class="message-box">New record saved.</div>';
        
    }
?>