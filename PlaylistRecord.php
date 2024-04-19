<?php
    include 'connect.php';
    $mysqli = new mysqli('localhost', 'root', '', 'dbbasiliscof2') or die (mysqli_error($mysqli));

    if(isset($_POST['btnAdd'])) {a
        $PlaylistId = $_POST['PlaylistId'];
        $PlaylistName = $_POST['PlaylistName'];
        $mysqli->query("INSERT into tblplaylistdashboard (PlaylistId, PlaylistName) values ('$PlaylistId', '$PlaylistName')") or die ($myqli->error);
        header("Location: dashboard.php");
    }
?>