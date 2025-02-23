<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin: 2px;
        }
        .product-images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <h2>Penjualan Produk</h2>
        </center>
        <table>
            <tr>
                <th>Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Diskon</th>
                <th>Total Bayar</th>
                <th>Uang Dibayar</th>
                <th>Kembalian</th>
                <th>Pesan</th>
            </tr>
            <?php
                $produkList = [
                    ["nama" => "Bakso", "harga" => 15000, "diskon" => 2000, "uangBayar" => 20000, "gambar" => [
                        "https://assets.unileversolutions.com/recipes-v2/245281.jpg"
                    ]],
                    ["nama" => "Steak", "harga" => 27500, "diskon" => 3000, "uangBayar" => 45000, "gambar" => [
                        "https://i0.wp.com/barapigrill.com/wp-content/uploads/2017/08/prime-ribeye-steak-jakarta.jpg?fit=620%2C352&ssl=1"
                    ]],
                    ["nama" => "Ayam Katsu", "harga" => 10000, "diskon" => 0, "uangBayar" => 10000, "gambar" => [
                        "https://img-global.cpcdn.com/recipes/b51561ce4711d66a/1200x630cq70/photo.jpg"
                    ]],
                    ["nama" => "Es Teh", "harga" => 4500, "diskon" => 1000, "uangBayar" => 2000, "gambar" => [
                        "https://asset.kompas.com/crops/9iB_ruTEMU7otPYnbCNVng8zhrQ=/0x0:4939x3293/1200x800/data/photo/2022/09/25/63300cfd403f0.jpg"
                    ]],
                ];
            ?>
            <?php foreach ($produkList as $produk): ?>
                <?php 
                    // **Operator Penugasan (=)** -> Digunakan untuk menetapkan nilai variabel.
                    $totalBayar = $produk["harga"] - $produk["diskon"];
                    $kembalian = $produk["uangBayar"] - $totalBayar;

                    // **Operator Perbandingan (>, ==, <)** -> Digunakan untuk membandingkan nilai uangBayar dan totalBayar.
                    if ($kembalian > 0) {
                        $pesan = "Terima kasih telah membeli " . $produk["nama"] . ". Uang kembalian Anda adalah Rp " . number_format($kembalian, 0, ',', '.') . ".";
                    } elseif ($kembalian == 0) {
                        $pesan = "Terima kasih telah membeli " . $produk["nama"] . ". Tidak ada kembalian.";
                    } else {
                        $pesan = "Maaf, uang yang Anda bayarkan kurang sebesar Rp " . number_format(abs($kembalian), 0, ',', '.') . ".";
                    }

                    // **Operator Logika (&&, ||)** -> Menambahkan contoh operator logika.
                    $diskonValid = ($produk["diskon"] > 0) && ($produk["harga"] >= 5000); // Contoh operator logika AND (&&)

                    // **Operator Ternary (? :)** -> Menentukan apakah ada diskon.
                    $diskonText = ($produk["diskon"] > 0) ? "Ya, ada diskon!" : "Tidak ada diskon.";
                ?>
                <tr>
                    <td>
                        <div class="product-images">
                            <?php foreach ($produk["gambar"] as $gambar): ?>
                                <img src="<?= $gambar ?>" alt="<?= $produk['nama'] ?>">
                            <?php endforeach; ?>
                        </div>
                    </td>
                    <td><?= ($produk["nama"])?></td>
                    <td><?= number_format($produk["harga"], 0, ',', '.') ?></td>
                    <td><?= number_format($produk["diskon"], 0, ',', '.') ?> (<?= $diskonText ?>)</td> <!-- Menampilkan hasil ternary -->
                    <td><?= number_format($totalBayar, 0, ',', '.') ?></td>
                    <td><?= number_format($produk["uangBayar"], 0, ',', '.') ?></td>
                    <td><?= number_format(max($kembalian, 0), 0, ',', '.') ?></td>
                    <td><?= $pesan ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
