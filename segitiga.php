<!DOCTYPE html>
<html>

<head>
    <title>Luas Segitiga</title>
</head>

<body>
    <h2>Hitung Luas Segitiga</h2>
    <form method="post">
        <table>
            <tr>
                <td>Alas</td>
                <td><input type="number" name="alas" required></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td><input type="number" name="tinggi" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" name="hitung" value="Hitung">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $luas = 0.5 * $alas * $tinggi;
        echo "<h3>Hasil: Luas Segitiga = $luas</h3>";
    }
    ?>
</body>

</html>