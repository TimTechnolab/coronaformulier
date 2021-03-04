<?php
include("dbb.php");
$a = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM OneTimeLink WHERE id='".$a."'");
if(mysqli_num_rows($query) > 0){
    echo "no";
    echo str_replace("http://wowie/","","http://wowie/".$a);
} else {
  $sql = "INSERT INTO OneTimeLink (id) VALUES ('$a')";

  if ($con -> query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $con->error;
  }
}


?>
