<html>
<body>
<?php $a = uniqid();
echo '<a href="redirect.php?id=' .$a.'">http://wowie/'.$a.'</a>';?>
<!-- <a href="/redirect.php?id= <?php $a = uniqid(); echo $a ?>">http://wowie/<?php echo $a ?></a> -->
<p><?php echo str_replace("http://wowie/","","http://wowie/".$a);?></p>
<?php
    include("dbb.php");
    $query = mysqli_query($con, "SELECT * FROM OneTimeLink WHERE id='".$a."'");


    // $connn = new mysqli('localhost','Root','WebICT$!','test');
    // $query = mysqli_query($connn, "SELECT * FROM OneTimeLink WHERE id='".$a."'");
    if (!$query) {
        die('Error: ' . mysqli_error($con));

    }

?>
</body></html>
