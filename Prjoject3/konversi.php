<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $celsius = $_POST["celsius"];

  // Validasi input (pastikan angka)
  if (is_numeric($celsius)) {
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<p>Hasil konversi: " . $fahrenheit . " Fahrenheit</p>";
  } else {
    echo "<p>Input tidak valid. Masukkan angka.</p>";
  }
}

?>