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

<html>

<head>

    <title>Edit User</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Update media</legend>

 

    <form action="actions/a_update.php" method="GET">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>discription</th>

                <td><input type="text" name="discription" placeholder="discription" value="<?php echo $data['discription'] ?>" /></td>

            </tr>     


<tr>

                <th>image</th>

                <td><input type="text" name="image" placeholder="image" value="<?php echo $data['image'] ?>" /></td>

            </tr>
            <tr>

                <input type="hidden" name="isbn_code" value="<?php echo $data['isbn_code']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="index.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 


 

</body>

</html>

 

<?php

}

?>