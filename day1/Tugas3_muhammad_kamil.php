<?php
    //* Mendefinisikan variabel angka1 dan angka2
    $angka1 = 9;
    $angka2 = 3;


    //* Mendefinisikan fungsi perjumlahan, pengurangan, perkalian, dan pembagian
    function perjumlahan($angka1, $angka2) {
        //? Mengembalikan hasil perjumlahan angka1 dan angka2
        return $hasil = $angka1 + $angka2;
    }

    function pengurangan($angka1, $angka2) {
        //? Mengembalikan hasil pengurangan angka1 dan angka2
        return $hasil = $angka1 - $angka2;
    }

    function perkalian($angka1, $angka2) {
        //? Mengembalikan hasil perkalian angka1 dan angka2
        return $hasil = $angka1 * $angka2;
    }

    function pembagian($angka1, $angka2) {
        //? Mengembalikan hasil pembagian angka1 dan angka2
        return $hasil = $angka1 / $angka2;
    }

    echo "<h3>Kalkulator Kicik 😊🙏</h3>";

    //* Menampilkan nilai dari angka1 dan angka2
    echo "Bilangan 1 : $angka1";
    echo "<br>";
    echo "Bilangan 2 : $angka2";
    echo "<hr>";

    //* Menampilkan hasil perhitungan
    echo "Hasil perjumlahan adalah : " . perjumlahan($angka1, $angka2);
    echo "<br>";
    echo "Hasil pengurangan adalah : " . pengurangan($angka1, $angka2);
    echo "<br>";
    echo "Hasil perkalian adalah : " . perkalian($angka1, $angka2);
    echo "<br>";
    echo "Hasil pembagian adalah : " . pembagian($angka1, $angka2);
?>

