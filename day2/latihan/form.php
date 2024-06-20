<?php
    session_start();

    $fileJson = "data.json";
    $fileTxt = "data.txt";

    if(!file_exists($fileJson)){
        $fp = fopen($fileJson, "a");
        fclose($fp);
    }

    $data = json_decode(file_get_contents($fileJson), true);

    if(isset($_POST['name'])) {
        $data[] = [
            "name" => $_POST['name'],
            "no_wa" => $_POST['no_wa'],
            "age" => $_POST['age']
        ];

        $dataInput =json_encode($data, JSON_PRETTY_PRINT);

        file_put_contents($fileJson, $dataInput);
        unlink($fileTxt);
        $fp = fopen($fileTxt, 'a');
        fwrite($fp, $dataInput."\n");
        fclose($fp);
        header("location: form.php");
        exit();
    }

    if(isset($_POST['reset'])) {
        file_put_contents($file, "");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input</title>
</head>
<body>
    <h3>Form</h3>
    <form action="./form.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="Input your name..." required>
            <br>
        <label for="no_wa">No. WhatsApp</label>
        <input type="text" name="no_wa" placeholder="Input your number..." required>
            <br>
        <label for="age">Age: </label>
        <input type="number" name="age" placeholder="Input your age..." required>
            <br>
        <button type="submit">Submit</button>
    </form>

    <form action="./form.php" method="post">
        <button type="submit">Reset</button>
    </form>

    <br>

    <h3>Data In JSON</h3>
    <?php
        $file = "data.json";
        if(file_exists($file) && !empty(file_get_contents($file))) {
            $data = json_decode(file_get_contents($file), true);
            foreach($data as $key => $val) {
                echo "Name: ". $val['name']. "<br>";
                echo "No. WhatsApp: ". $val['no_wa']. "<br>";
                echo "Age: ". $val['age']. "<br>";
                echo "<hr>";
            }
        }else {
            echo "Data not found";
        }
    ?>

        <br>

    <h3>Data In TXT</h3>
    <?php
        $file = "data.txt";
        if(file_exists($file) && !empty(file_get_contents($file))) {
            echo readfile($file);
        }else {
            echo "Data not found";
        }
    ?>
</body>
</html>
