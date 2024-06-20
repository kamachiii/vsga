<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input</title>
</head>
<body>
    <h3>Form</h3>
    <form action="./action.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="Input your name..." required>
            <br>
        <label for="name">Class: </label>
        <input type="text" name="class" placeholder="Input your class..." required>
            <br>
        <button type="submit">Submit</button>
    </form>

    <br>

    <h3>Data</h3>
    <?php
        $file = "data.txt";
        if(file_exists($file) && !empty(file_get_contents($file))) {
            $data = file_get_contents($file);
            echo nl2br($data);
        }else {
            echo "Data not found";
        }
    ?>
</body>
</html>
