<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Rata-Rata Nilai</title>
</head>
<body>
    <h1>Form Nilai Mata Kuliah</h1>
    <form method="POST">
        <label for="matkul1">Mata Kuliah 1:</label>
        <input type="number" name="matkul1" required><br><br>

        <label for="matkul2">Mata Kuliah 2:</label>
        <input type="number" name="matkul2" required><br><br>

        <label for="matkul3">Mata Kuliah 3:</label>
        <input type="number" name="matkul3" required><br><br>

        <label for="matkul4">Mata Kuliah 4:</label>
        <input type="number" name="matkul4" required><br><br>

        <label for="matkul5">Mata Kuliah 5:</label>
        <input type="number" name="matkul5" required><br><br>

        <input type="submit" value="Hitung Rata-Rata">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $matkul1 = $_POST['matkul1'];
        $matkul2 = $_POST['matkul2'];
        $matkul3 = $_POST['matkul3'];
        $matkul4 = $_POST['matkul4'];
        $matkul5 = $_POST['matkul5'];

        // Menghitung rata-rata
        $total = $matkul1 + $matkul2 + $matkul3 + $matkul4 + $matkul5;
        $rataRata = $total / 5;

        // Menentukan status kelulusan
        if ($rataRata >= 60) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        // Menampilkan hasil
        echo "<h2>Hasil:</h2>";
        echo "Rata-rata Nilai: " . number_format($rataRata, 2) . "<br>";
        echo "Status Kelulusan: " . $status;
    }
    ?>
</body>
</html>
