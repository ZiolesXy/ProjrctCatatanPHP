<?php
// Tipe Data dalam PHP

// 1. String - Teks dalam kutipan
$stringVar = "Rekayasa Perangkat Lunak";
echo "Jurusan: " . $stringVar . "<br>";

// 2. Integer - Bilangan bulat
$intVar = 89;
echo "Nilai : " . $intVar . "<br>";

// 3. Float - Bilangan desimal
$floatVar = 3.14;
echo "Float: " . $floatVar . "<br>";

// 4. Boolean - True atau False
$boolVar = true;
echo "Nilai: " . ($boolVar ? 'true' : 'false') . "<br>";

// 5. Array - Kumpulan nilai
$arrayVar = array('Apple', 'Banana', 'Cherry');
echo "Berikut Ini adalah Contoh Buah: ". "<br>";
print_r($arrayVar);
echo "<br>";
?>

<h1>Tugas</h1>
<?php
    $nilai_mtk = "65";
    $remed_mtk = "95";

    $nilai_pkn = "54";
    $remed_pkn = "100";

    $non_remed = ($nilai_mtk + $nilai_pkn) /2;
    $remed_total = ((($nilai_mtk + $remed_mtk)/2) + (($nilai_pkn + $remed_pkn) /2)) /2;

    echo "Nilai Matematika : ". $nilai_mtk ."<br>";
    echo "Nilai Pancasila : ". $nilai_pkn ."<br>";
    echo "<br>";

    echo "Nilai Remedial Matematika : ". $remed_mtk ."<br>";
    echo "Nilai Remedial Pancassila : ". $remed_pkn ."<br>";
    echo "<br>";

    echo "Nilai Gabungan Yang Belum DIremedial Adalah : ". $non_remed. "<br>";
    echo "Nilai Gabungan Setelah di Remedial Adalah : ". $remed_total. "<br>";
?>