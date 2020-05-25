<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Album example · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="styles/styles.css">
</head>

<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3PHP_Again;charset=utf8;port=3306', 'root', '');
$request = "SELECT * FROM collection";
$response = $bdd->query($request);
$collection = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<header class="container">

    <div class="row">

        <div class="offset-2 mb-4">
            <a href="add.php">
                <img src="img/Hello There.jpg" alt="Hello there!">
            </a>
        </div>

    </div>

</header>

<body class="container">

    <div class="row">

        <!-- Collection foreach -->
        <?php foreach ($collection as $sabre) : ?>
            <div class="col-md-4">
                <div class="card mb-4 hover" data-color="<?= $sabre['color'] ?>" style="border-color: <?= $sabre['color'] ?>;">
                    <div class="card-body" width="100%" height="225" id=" <?= $sabre['id'] ?>">
                        
                        <img class="card-img-top" src="<?= $sabre["image"] ?>"></img>
                        
                        <p class="card-title text-center lead"> <?= $sabre["owner"] ?> </p>
                        
                        <a href="confirmDelete.php?id=<?= $sabre['id'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                        
                        
                        <!-- <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="show.php?id=<?= $sabre['id'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                <a href="edit.php?id=<?= $sabre['id'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                <a href="confirmDelete.php?id=<?= $sabre['id'] ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Delete</button></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php endforeach ?>

</body>

<!-- JS hover boxshadow -->
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script>
    $.noConflict();
    jQuery(document).ready(function($) {
        $('.hover').mouseover((e) => {
            $newColor = $(e.currentTarget).attr('data-color')
            $(e.currentTarget).css('box-shadow', '5px 5px 10px ' + $newColor)
        })
        $('.hover').mouseleave((e) => {
            $(e.currentTarget).css('box-shadow', "none")
        })
    });
</script>

<?php


?>