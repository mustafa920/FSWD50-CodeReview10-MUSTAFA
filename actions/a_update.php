<?php
require_once 'db_connect.php';

if($_GET) {
 $discription = $_GET['discription'];
$image = $_GET['image'];

$isbn_code = $_GET['isbn_code'];


    $sql = " UPDATE media SET
     discription = ' $discription',
        image = '$image' WHERE isbn_code = {$isbn_code}";
    if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$isbn_code."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

 

    $connect->close();

 

}

 

?>
