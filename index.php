<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nomor 1</title>
</head>

<body>
    <form action="" method="POST">
        <label for="input">Isilah</label>
        <input type="text" name="input" id="input">
        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $teks = $_POST['input'];
        $angka = ''; // String untuk menyimpan angka yang ditemukan

        // Menggunakan foreach pada hasil dari str_split untuk memeriksa setiap karakter
        foreach (str_split($teks) as $char) {
            if (is_numeric($char)) {
                if ($angka != '') {
                    $angka .= ','; // Menambahkan koma sebelum menambah angka berikutnya
                }
                $angka .= $char; // Menambahkan angka ke string
            }
        }

        if ($angka) {
            // Jika ada angka, tampilkan string yang telah digabung
            echo "Teks mengandung angka: $angka";
        } else {
            echo "Teks tidak mengandung angka.";
        }
    }
    ?>
</body>

</html>
