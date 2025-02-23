<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .biodata-container {
            background-image: linear-gradient(to bottom right, cyan, yellow);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }
        p {
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }
        strong {
            color: #333333;
        }
    </style>
</head>
<body>
    <div class="biodata-container">
        <?php
        // Biodata dalam bentuk array
        $biodata = [
            'nama' => 'Pasha Prabasakti',
            'tanggal_lahir' => '2008-08-08',
            'alamat' => 'Jl. Suamulia IV NO 138, Jakarta',
            'email' => 'pashaprabasakti@gmail.com',
            'telepon' => '081584012152'
        ];

        // Menampilkan biodata
        echo "<h1>Biodata</h1>";
        echo "<p><strong>Nama:</strong> " . $biodata['nama'] . "</p>";
        echo "<p><strong>Tanggal Lahir:</strong> " . $biodata['tanggal_lahir'] . "</p>";
        echo "<p><strong>Alamat:</strong> " . $biodata['alamat'] . "</p>";
        echo "<p><strong>Email:</strong> " . $biodata['email'] . "</p>";
        echo "<p><strong>Telepon:</strong> " . $biodata['telepon'] . "</p>";
        ?>
    </div>
</body>
</html>