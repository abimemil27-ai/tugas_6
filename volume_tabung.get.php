<?php
// Cek apakah parameter sudah ada di URL
if (isset($_GET['jari']) && isset($_GET['tinggi'])) {
    $jari = $_GET['jari'];
    $tinggi = $_GET['tinggi'];

    if (is_numeric($jari) && is_numeric($tinggi)) {
        $volume = 3.14 * $jari * $jari * $tinggi; // rumus: π r² t
        echo "<h3>Hasil Perhitungan Volume Tabung</h3>";
        echo "Jari-jari: $jari <br>";
        echo "Tinggi: $tinggi <br>";
        echo "Volume Tabung: $volume";
    } else {
        echo "Masukkan angka yang valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Volume Tabung (GET)</title>
</head>
<body>
    <h2>Form Volume Tabung (GET)</h2>
    <form method="get" action="volume_tabung_get.php">
        <label>Jari-jari: </label>
        <input type="text" name="jari" required><br><br>
        <label>Tinggi: </label>
        <input type="text" name="tinggi" required><br><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
