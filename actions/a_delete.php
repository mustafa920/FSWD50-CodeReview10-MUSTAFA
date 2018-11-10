<?php

 

require_once 'db_connect.php';

 

if($_GET) {

    $id = $_GET['id'];

 

    $sql = "DELETE FROM media WHERE isbn_code = {$id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../index.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error deleting record : " . $connect->error;

    }

 

    $connect->close();

}

 

?>