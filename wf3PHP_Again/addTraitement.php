<?php 
$con = new PDO('mysql:host=localhost;dbname=wf3PHP_Again;charset=utf8;port=3306', 'root', '');

// var_dump( $_POST);

if (isset($_POST['but_upload'])) {

    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name);

        // Add to db
        $request = "INSERT INTO collection (owner, color, image)
            VALUES (:owner, :color, :image)";
        $response = $con->prepare($request);
        $response->execute([
        'owner'         => $_POST['owner'],
        'color'         => $_POST['color'],
        'image'         => $target_dir.$name,
        ]);
        echo "<a href='index.php'><img src='img/addition.gif'></a>";
    };
}





?>