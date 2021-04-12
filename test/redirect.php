<?php
include("db.php");
$a = $_GET['id'];
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$query = mysqli_query($con, "SELECT * FROM OneTimeLink WHERE id='".$a."'");

$stmt = $con->prepare("SELECT * FROM onetimelink WHERE id= '".$a."'");
$stmt->execute();
if(!$stmt || !$con){
  echo "Connection Error:".$con->error;
}
if(mysqli_num_rows($stmt->get_result()) > 0){
    echo "no";
} else {
  $stmt2 = $con->prepare("INSERT INTO onetimelink (id) VALUES ('$a')");
  if ($stmt2->execute() === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $con->error;
  }
}


?>
