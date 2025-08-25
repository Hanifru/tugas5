<!DOCTYPE html>
<html>

<head>
    <title>Luas Jajar Genjang</title>
</head>

<body>
    <h2>Hitung Luas Jajar Genjang</h2>
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
        $luas = $alas * $tinggi;
        echo "<h3>Hasil: Luas Jajar Genjang = $luas</h3>";
    }
    ?>
</body>

</html>