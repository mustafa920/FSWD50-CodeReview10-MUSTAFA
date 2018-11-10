
<?php

 

require_once 'actions/db_connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM media WHERE isbn_code = {$id}";

    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

 

    $connect->close();

?>

 

<!DOCTYPE html>

<html style="background-image: url(https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428_960_720.jpg);background-repeat: no-repeat; background-size: 100% 100%">

<head>

    <title>Delete User</title>

</head>

<body>

 

<h3>Do you really want to delete this user?</h3>

<form action="actions/a_delete.php" method="GET">

 

    <input type="hidden" name="id" value="<?php echo $data['isbn_code'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="index.php"><button type="button">No, go back!</button></a>

</form>

 

</body>

</html>

 

<?php

}

?>