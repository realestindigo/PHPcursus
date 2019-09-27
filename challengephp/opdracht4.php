<?php


session_start();

if(isset($_SESSION['boodschappen'])) {

    $_SESSION['boodschappen'] = array("aardappelen", "aardbeien", "3 pakken melk", "yoghurt");
}
if (isset($_POST['boodschap'])) {
    array_push($_SESSION[ 'boodschappen'], $_POST['boodschap']);
}

echo "<ul>";
foreach ( $_SESSION[ 'boodschappen'] as $b) {
    echo "<li>" . $b . "</li>";
}

?>

<form action=""opdracht4.php' method="post">
    <input type="text" name="boodschap">
    <input type="submit">
</form>
