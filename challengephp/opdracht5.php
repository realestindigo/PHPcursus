<?php

session_start();

if(isset($_GET['verwijder'])) {
    $hulparray = [];
    foreach($_SESSION['boodschappen'] as $boodschap) {
        if($boodschap != $_GET['verwijder']) {
        }
    }
    $_SESSION['boodschappen'] = $hulparray;
}

if(isset($_GET['leegmaken']) && $_GET['leegmaken'] == 'ja') {
    $_SESSION['boodschappen'] = [];
}

if(!isset($_SESSION['boodschappen'])) {
    $_SESSION['boodschappen'] = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
}

if(isset($_POST['boodschap'])) {
    array_push($_SESSION['boodschappen'], $_POST['boodschap']);
}

echo "<ul>";
foreach($_SESSION['boodschappen'] as $b) {
    echo "<li><a href='opdracht5.php?verwijder=$b'>$b</li>";
}
echo"</ul>";
?>

<form action="opdracht5.php" method="post">
    <input type="text" name="boodschap">
    <input type="submit">
</form>

<a href="opdracht5.php?leegmaken=ja">Leeg boodschappenlijstje</a>;