<?php
// Cek apakah parameter sudah ada
if (isset($_GET['alas']) && isset($_GET['tinggi'])) {
    $alas = $_GET['alas'];
    $tinggi = $_GET['tinggi'];

    if (is_numeric($alas) && is_numeric($tinggi)) {
        $luas = 0.5 * $alas * $tinggi;
        echo "<h3>Hasil Perhitungan</h3>";
        echo "Alas: $alas <br>";
        echo "Tinggi: $tinggi <br>";
        echo "Luas Segitiga: $luas";
    } else {
        echo "Masukkan angka yang valid!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Segitiga (GET)</title>
</head>
<body>
    <h2>Form Luas Segitiga (GET)</h2>
    <form method="get" action="luas_segitiga_get.php">
        <label>Alas: </label>
        <input type="text" name="alas" required><br><br>
        <label>Tinggi: </label>
        <input type="text" name="tinggi" required><br><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
