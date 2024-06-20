<?php
    $name = $_POST['name'];
    $class = $_POST['class'];

    $file = fopen("data.txt", "a");
    fputs($file, "Name: " . $name . "- Class: " . $class . ",\n");
    fclose($file);

    header("location: form.php");
    exit();
?>
