<?php
$bdd = new PDO('mysql:host=localhost;dbname=wf3PHP_Again;charset=utf8;port=3306', 'root', '');
$id = $_GET["id"];
$request = "DELETE FROM collection WHERE id=$id";

// $response = $bdd->prepare($request);
// var_dump($response);

// image deletion
$image = "SELECT 'image' FROM collection WHERE id=$id";
unlink($image);

$doit = $bdd->query($request);

echo '<script type="text/javascript">
        window.location = "index.php"
    </script>';
?>