<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hasil {
            color: blue; /* Mengatur warna teks menjadi biru */
        }
    </style>
</head>
<body>
    <?php
    function perkalianLimaTanpaNol($limit) {
        // Perulangan untuk menghitung perkalian 5 dari 1 hingga $limit
        for ($i = 1; $i <= $limit; $i++) {
            $perkalian = $i * 5;

            // Mengubah hasil perkalian menjadi string
            $perkalianString = (string)$perkalian;

            // Memeriksa apakah string hasil perkalian mengandung angka 0
            $adaNol = false;

            // Hitung panjang string tanpa menggunakan strlen
            $panjang = 0;
            foreach (str_split($perkalianString) as $karakter) {
                $panjang++;
                if ($karakter == '0') {
                    $adaNol = true;
                    break;
                }
            }

            // Jika tidak ada angka 0, tampilkan hasil perkalian
            if (!$adaNol) {
                echo `$i x 5 = <span class="hasil">$perkalian</span><br>`;
            }
        }
    }

    // Contoh penggunaan
    $limit = 11; // Batas perhitungan
    perkalianLimaTanpaNol($limit);
    ?>
</body>
</html>
