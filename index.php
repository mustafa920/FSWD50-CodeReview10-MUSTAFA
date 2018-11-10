<?php require_once 'actions/db_connect.php'; ?>
<?php require_once 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/animate.css">
    <title>code-review-10</title>
</head>
<body>
    <?php 

 $sql = "SELECT * FROM media";

            $result = $connect->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
    print("<div id='main' class='container wow slideInLeft'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 mb-5 pl-2'><img src='".$row['image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' 
         height='350'></div><div id='sec' class='col-lg-6 col-md-6 col-sm-12'><p><p><span>DISCRIPTION : </span>".$row["discription"]." It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .</p><p><span>TYPE :</span> ".$row["type"]."</p><p> <span>STATUS :</span>".$row["status"]."</p><div>
         <a href='update.php?id=".$row['isbn_code']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete.php?id=".$row['isbn_code']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div></div></div></div><hr>");
}
   } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

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
</body>
</html>