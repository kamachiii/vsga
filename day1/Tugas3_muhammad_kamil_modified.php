<?php
    if(isset($_POST['angka1']) && $_POST['angka2']) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
    }

    function perjumlahan($angka1, $angka2) {
        return $hasil = $angka1 + $angka2;
    }
    function pengurangan($angka1, $angka2) {
        return $hasil = $angka1 - $angka2;
    }
    function perkalian($angka1, $angka2) {
        return $hasil = $angka1 * $angka2;
    }
    function pembagian($angka1, $angka2) {
        return $hasil = $angka1 / $angka2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="/Tugas3_muhammad_kamil_form.php" method="post">
        <input type="number" name="angka1" placeholder="Angka 1">
        <input type="number" name="angka2" placeholder="Angka 2">
        <button type="submit">Submit</button>
    </form>
    <br>
    <?php
        if(isset($_POST['angka1']) && $_POST['angka2']){
            echo "Bilangan pertama : $angka1 <br>";
            echo "Bilangan kedua : $angka2 <br>";
            echo "<hr>";
            echo "hasil perjumlahan: " . perjumlahan($angka1, $angka2) . "<br>";
            echo "hasil pengurangan: " . pengurangan($angka1, $angka2) . "<br>";
            echo "hasil perkalian: " . perkalian($angka1, $angka2) . "<br>";
            echo "hasil pembagian: " . pembagian($angka1, $angka2) . "<br>";
        }
    ?>

</body>
</html>

