<?php
// Cek apakah form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

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
    <title>Hitung Luas Segitiga (POST)</title>
</head>
<body>
    <h2>Form Luas Segitiga</h2>
    <form method="post" action="luas_segitiga_post.php">
        <label>Alas: </label>
        <input type="text" name="alas" required><br><br>
        <label>Tinggi: </label>
        <input type="text" name="tinggi" required><br><br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
