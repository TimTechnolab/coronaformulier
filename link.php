<html>
<body>
<?php
//create uniq id for link
$a = uniqid();
//display link with uniqid added as variable and a variable to check if you have already logged in.
echo '<a href="redirect.php?id=' .$a.'&send=nee">http://wowie/'.$a.'</a>';?>
</body></html>
