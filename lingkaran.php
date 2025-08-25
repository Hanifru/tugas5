<!DOCTYPE html>
<html>

<head>
    <title>Luas Lingkaran</title>
</head>

<body>
    <h2>Hitung Luas Lingkaran</h2>
    <form method="post">
        <table>
            <tr>
                <td>Jari-jari</td>
                <td><input type="number" name="jari" required></td>
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
        $r = $_POST['jari'];
        $luas = 3.14 * $r * $r;
        echo "<h3>Hasil: Luas Lingkaran = $luas</h3>";
    }
    ?>
</body>

</html>