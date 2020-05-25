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
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <img src="img/General Kenobi.jpg" alt="" class="mb-4">
                    <form action="addTraitement.php" method="post" enctype="multipart/form-data">

                        <!-- Grievous stole it from? -->
                        <div class="form-group">
                            <label for="">Previous owner</label>
                            <input type="text" name="owner" id="">
                        </div>

                        <!-- Color? -->
                        <div class="form-group">
                            <label for="">Color</label>
                            <!-- <input type="text" name="color" id=""> -->
                            <select name="color" id="">
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                                <option value="purple">Purple</option>
                                <option value="red">Red</option>
                                <option value="yellow">Yellow</option>
                            </select>
                        </div>

                        <!-- Image? -->
                        <div class="form-group">
                            <input type='file' name='file' />
                            <input type='submit' class="btn btn-primary" value='Add to collection' name='but_upload'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<?php


?>