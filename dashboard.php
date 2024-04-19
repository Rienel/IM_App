<?php
    include 'connect.php';
    // mysql_connect("localhost","root","","dbbasiliscof2") or die("could not connect");
    // mysql_select_db("kkp") or die("could not find db!");
    $output ='';

    if (isset($_POST['search'])){
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        $query = mysql_query("SELECT * FROM personal_info WHERE FirstName LIKE '%$searchq%' OR SurName LIKE '%$searchq%'") or die("could not search");
        $count = mysql_num_rows($query);
        if($count == 0){
            $output = 'There was no search results!';
        }else{
            while($row = mysql_fetch_array($query)){
                $fname = $row['FirstName'];
                $lname = $row['SurName'];
                $id = $row['id'];
                $output .= '<div>'.$fname.''.$lname.'</div>';
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <title>Document</title>
</head>
<body>
    <div class="landing-page">
        <div class="navbar">
            <h1>Logo</h1>
            <nav>
                <div class="user-profile">
                <li><a href="createPlaylist.php">Create Playlist</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li>About Us</li>
                <li>Contact Us</li>
                    <input type="text" placeholder="Search..">
                </div>
            </nav>
        </div>
    </div>
    <div class="content">
        <h1>This is the landing page.</h1>
        <p>Spotify is a digital music, podcast, and video service that gives you
        access to millions of songs and other content from creators all over the world.
        Basic functions such as playing music are totally free, but you can also choose to upgrade to Spotify Premium.
        </p>
    </div>
   
    <div class="registered-users-table">
        <div class="registered-users"><h1>List of Users Registered</h1></div>
        <?php
            $mysqli = new mysqli('localhost', 'root', '', 'dbbasiliscof2') or die (mysqli_error($mysqli));
            $resultset = $mysqli->query("SELECT * from tbluserprofile") or die ($mysqli->error);  
        ?>
        <table id="tblStudentRecords" class="table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Seq Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        while($row = $resultset->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['userid'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <a href="">VIEW</a>
                            <a href="delete.php?ID=<?php echo $row['userid']; ?>">DELETE</a>
                        </td>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>

    <!-- Playlist -->
    <div class="registered-users-table">
        <div class="registered-users"><h1>List of Created Playlist</h1></div>
        <?php
            $mysqli = new mysqli('localhost', 'root', '', 'dbbasiliscof2') or die (mysqli_error($mysqli));
            $resultset = $mysqli->query("SELECT * from tblplaylistdashboard") or die ($mysqli->error);  
        ?>
        <table id="tblStudentRecords" class="table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Seq Number</th>
                    <th>Playlist Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        while($row = $resultset->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['PlaylistId'] ?></td>
                        <td><?php echo $row['PlaylistName'] ?></td>
                        <td>
                            <a href="#">VIEW</a>
                            <a href="editplaylist.php?ID=<?php echo $row['PlaylistId']; ?>">EDIT</a>
                            <a href="deleteplaylist.php?ID=<?php echo $row['PlaylistId']; ?>">DELETE</a>
                            
                        </td>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>     
    </div>

    <?php
        if(isset($_GET['result'])) {
            if($_GET['result']=='success'){
                echo "Deleted";
            } else {
                echo "error";
            }
        }
    ?>
   
</body>
</html>