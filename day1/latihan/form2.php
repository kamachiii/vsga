<?php
    session_start();
    if(!isset($_SESSION['name'])){
        $_SESSION['name'] = [];
        $_SESSION['class'] = [];
    }
    if(isset($_POST['name'])) {
        if(!in_array($_POST['name'], $_SESSION['name'])){
            $_SESSION['name'][] = $_POST['name'];
            $_SESSION['class'][] = $_POST['class'];
            header("location: form2.php");
            exit();
        }else{
            echo "Your name is already taken";
        }
    }
    $i = 1;
    // unset($_SESSION['name'], $_POST['class']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form action="./form2.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" placeholder="Input your name..." required>
        <label for="class">Class: </label>
        <input type="text" name="class" placeholder="Input your class..." required>
        <button type="submit">Submit</button>
    </form>
    <br>
    <table colspan="2">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Class</th>
        </tr>
        <?php
        if(isset($_SESSION['name'])){
            foreach($_SESSION['name'] as $key => $value){
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$_SESSION['name'][$key]."</td>
                    <td>".$_SESSION['class'][$key]."</td>
                </tr>";
            }
        }
        ?>
    </table>
</body>
</html>
