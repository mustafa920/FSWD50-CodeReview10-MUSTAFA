<?php 

$sql= "SELECT *FROM media ";
$result = mysqli_query($conn,$sql);

$newarray = $result->fetch_all(MYSQLI_ASSOC);

foreach ($newarray as $key) {
	print("<div id='main' class='container wow slideInLeft'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 mb-5 pl-2'><img src='".$key['image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' 
		 height='350'></div><div id='sec' class='col-lg-6 col-md-6 col-sm-12'><p><span> isbn_code :</span> ".$key["isbn_code"]."</p><p><span>DISCRIPTION : </span>".$key["discription"]." It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum .</p><p><span>TYPE :</span> ".$key["type"]."</p><p> <span>STATUS :</span>".$key["status"]."</p></div></div></div><hr>");
}


 ?>