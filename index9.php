<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Pecahan Uang</title>
    <style>
        .hasil {
            color: blue; /* Mengatur warna teks menjadi biru */
        }
    </style>
</head>
<body>
    <h1>Hitung Pecahan Uang Rupiah</h1>
    <form action="" method="post">
        <label for="uang">Masukkan Jumlah Uang (dalam Rupiah):</label>
        <input type="number" id="uang" name="uang" min="0" step="1" required>
        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jumlahUang = intval($_POST['uang']);

        function hitungPecahan($jumlahUang) {
            $pecahan = [
                100000 => 0,
                50000  => 0,
                20000  => 0,
                10000  => 0,
                5000   => 0,
                2000   => 0,
                1000   => 0,
                500    => 0,
                100    => 0,
                50     => 0,
                
            ];

            // Menghitung jumlah lembar untuk setiap pecahan
            foreach ($pecahan as $nominal => &$jumlah) {
                $jumlah = intdiv($jumlahUang, $nominal);
                $jumlahUang %= $nominal;
            }

            return $pecahan;
        }

        $pecahan = hitungPecahan($jumlahUang);

        echo "<h2>Uang: Rp. " . number_format($_POST['uang'], 0, ',', '.') . "</h2>";
        echo "<h3>Lembar Rupiah:</h3>";
        echo "<ul>";
        foreach ($pecahan as $nominal => $jumlah) {
            if ($jumlah > 0) {
                echo "<li>Rp " . number_format($nominal, 0, ',', '.') . " : $jumlah</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
