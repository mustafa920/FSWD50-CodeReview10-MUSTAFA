   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/animate.css">
    <title>code-review-10</title>

  <nav class="navbar navbar-dark bg-warning justify-content-between">
  <a class="navbar-brand" href="../index.php">HOME</a>
  <a class="navbar-brand" href="../create.php">ADD BOOKS</a>
  <form class="form-inline">
<div id="reality" class="glass"  class="float-right">
  <label for="switcheroo" class="timeframe panel">
  <?php $d=date("D/m/y");echo"<em>".$d."</em>";
 ?>
    <time></time>
        </a>
  </label>
  </div>
  </form>
</nav>

<?php require_once 'db_connect.php';

if($_GET){
$discription = $_GET['discription'];
$type = $_GET['type'];
$status = $_GET['status'];
$image = $_GET['image'];

$sql1 = "INSERT INTO media (discription, type,status,image,fk_author_id,fk_publisher_id)
VALUES ('$discription','$type','$status','$image',1,1)";
    if($connect->query($sql1) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

    } else {

        echo "Error " . $sql1. ' ' . $connect->connect_error;

    }

 

    $connect->close();

}

?>
  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<script>
	var time = new Date();
var h = time.getHours();
if (h > 12) {
    h -= 12;
} else if (h === 0) {
  h = 12;
}
var m = time.getMinutes();
if (m < 10){ m = "0" + m;  }

$("time").text(h + ":" + m);
</script>