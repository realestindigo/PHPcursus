<?php

?>

<!D0CTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php

$bomen = array("boom1.jpg","boom2.jpg","boom3.jpg","boom4.jpg");

foreach ($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}

?>


</body>

</html>