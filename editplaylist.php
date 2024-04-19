<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><h1>Edit Playlist</h1></div>
    <h2>Edit Playlist Name: </h1>
    <form method="post">
        <input type="text" placeholder="Playlist name" name="txtplaylistname">
        <button type="submit" name="btnSave">Save</button>
    </form>
 
    <?php
        include 'connect.php';
        $ID = $_GET['ID'];
                if(isset($_POST['btnSave'])){
                    $PlaylistName=$_POST['txtplaylistname'];
                    echo "<p>'Error deleting record'</p>";
                           
                    $sql ="UPDATE tblplaylistdashboard
                            SET PlaylistName = '$PlaylistName'
                            WHERE PlaylistId = '$ID'";
                    if (mysqli_query($connection, $sql)) {
                        mysqli_close($connection);
                        header('Location: dashboard.php'); 
                        exit;
                    } else {
                        echo "Error deleting record";
                    }
                   
                }    
 
            ?>
</body>
</html>