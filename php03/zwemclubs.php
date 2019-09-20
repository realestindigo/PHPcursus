<?php

?>

<!D0CTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>

    </style>
</head>
<body>
<?php
$zwemclubs = array("De spartelkuikens [25] ","De waterbuffels [32] ","Plonsmderin [11] ","Bommetje [23] ");

foreach ($zwemclubs as $zwem) {
    echo "<li>" . $zwem . "</li>";
}



for ($i = 0; $i <=4; $i++) {
    echo "<img src='img/logo/zwemlogo.png'>";
}

?>
</body>
</html>