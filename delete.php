<?php
include 'connect.php';
 
    if(isset($_GET['ID'])) {
        $ID = $_GET['ID'];

        $sql = "DELETE FROM tbluserprofile WHERE userid='$ID'";
        if(mysqli_query($connection, $sql)) {
                mysqli_close($connection);
                header("Location: dashboard.php");
                exit();
        } else {
                echo "Error deleting record from tbluseraccount: " . mysqli_error($connection);
        }
    }
?>