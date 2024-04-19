<?php
    $connection = new mysqli('localhost', 'root', '', 'dbbasiliscof2');

    if(!$connection) {
        die (mysqli_error($mysqli));
    }
?>  