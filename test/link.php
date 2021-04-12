<html>
<body>
<?php
  include("db.php");
  $a = uniqid();
  echo '<a href="redirect.php?id=' .$a.'">http://wowie/'.$a.'</a>';
?>
</body></html>
