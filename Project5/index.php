<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Diskon Sederhana</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
  </style>
</head>
<body>
  <div class="container">
    <h1>Sistem Diskon</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="number" name="total" placeholder="Masukkan Total Pembelian" required>
      <input type="submit" value="Hitung Diskon">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $total = $_POST["total"] ?? 0;

      if ($total >= 500000) {
        $jenis_diskon = "Diskon 15%";
        $persentase_diskon = 15;
      } elseif ($total >= 250000) {
        $jenis_diskon = "Diskon 10%";
        $persentase_diskon = 10;
      } elseif ($total >= 100000) {
        $jenis_diskon = "Diskon 5%";
        $persentase_diskon = 5;
      } else {
        $jenis_diskon = "Tidak ada diskon";
        $persentase_diskon = 0;
      }

      $jumlah_diskon = $total * ($persentase_diskon / 100);
      $total_setelah_diskon = $total - $jumlah_diskon;

      echo "<div class='hasil'>";
      echo "<p>Total Pembelian: Rp " . number_format($total, 0, ',', '.') . "</p>";
      echo "<p>Jenis Diskon: " . $jenis_diskon . "</p>";
      echo "<p>Jumlah Diskon: Rp " . number_format($jumlah_diskon, 0, ',', '.') . "</p>";
      echo "<p>Total Setelah Diskon: Rp " . number_format($total_setelah_diskon, 0, ',', '.') . "</p>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
