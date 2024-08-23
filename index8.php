<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Jumlah Angka Sama</title>
</head>
<body>
    <h1>Cari Jumlah Angka Sama</h1>
    <form method="post">
        <label for="cari">Masukkan Angka yang Dicari:</label>
        <input type="number" id="cari" name="cari" required>
        <button type="submit">Cari</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cari'])) {
        // Array data angka
        $data = [80, 90, 75, 100, 85, 100, 61,100];

        // Angka yang dicari
        $cari = intval($_POST['cari']);

        // Hitung jumlah kemunculan angka
        $jumlahAngka = array_count_values($data);

        // Tampilkan hasil pencarian
        if (isset($jumlahAngka[$cari])) {
            echo "<p>Jumlah angka $cari = " . $jumlahAngka[$cari] . "</p>";
        } else {
            echo "<p>Tidak ada angka yang sama.</p>";
        }
    }
    ?>
</body>
</html>