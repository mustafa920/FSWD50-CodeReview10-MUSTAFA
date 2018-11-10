 <nav class="navbar navbar-dark bg-warning justify-content-between">
  <a class="navbar-brand" href="index.php">HOME</a>
  <a class="navbar-brand" href="#">ADD BOOKS</a>
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

   
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428_960_720.jpg);background-repeat: no-repeat; background-size: 100% 100%">
<div class="container" id="form">
  <!-- FORM START HERE -->
<form action="actions/a_create.php" method="get">
  <div class="form-group">
    <label for="exampleInputPassword1">discription :</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="discription" name="discription">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">type  :</label>
<select name="type">
  <option value="CD">CD</option>
  <option value="BOOK">BOOK</option>
  <option value="DVD">DVD</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">status :</label>
<select name="status">
  <option value="AVAILABLE">AVAILABLE</option>
  <option value="RESERVED">RESERVED</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">image url :</label>
    <input type="text" class="form-control" id="exampleInputimage" placeholder="image url" name="image">
  </div>
  <div id="btn">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 ADD BOOK ...!
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD BOOK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 YOUR BOOK HAS BEEN ADDED ..<h1>✔</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success" name="submit">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</div>
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
