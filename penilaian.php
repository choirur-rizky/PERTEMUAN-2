<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <h1>Aplikasi Penilaian Mahasiswa</h1>
    <form method="POST">
        <?php for ($i = 1; $i <= 7; $i++): ?>
            <label for="mata_kuliah<?php echo $i; ?>">Masukkan Nilai Mata Kuliah <?php echo $i; ?>:</label>
            <input type="number" name="nilai[]" required placeholder="Masukkan nilai" min="0" max="100"><br><br>
        <?php endfor; ?>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        $total_nilai = 0;
        $jumlah_mata_kuliah = count($nilai);

        // Menghitung total nilai
        for ($i = 0; $i < $jumlah_mata_kuliah; $i++) {
            $total_nilai += $nilai[$i];
        }

        // Menghitung rata-rata
        $rata_rata = $total_nilai / $jumlah_mata_kuliah;

        // Menentukan status kelulusan
        if ($rata_rata >= 60) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        // Menampilkan hasil
        echo "<h2>Hasil Penilaian</h2>";
        echo "<p>Nilai Rata-rata: " . number_format($rata_rata, 2) . "</p>";
        echo "<p>Status Kelulusan: $status</p>";
    }
    ?>
</body>
</html>
