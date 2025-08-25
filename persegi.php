<!DOCTYPE html>
<html>

<head>
    <title>Luas Persegi</title>
</head>

<body>
    <h2>Hitung Luas Persegi</h2>
    <form method="post">
        <table>
            <tr>
                <td>Sisi</td>
                <td><input type="number" name="sisi" required></td>
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
        $sisi = $_POST['sisi'];
        $luas = $sisi * $sisi;
        echo "<h3>Hasil: Luas Persegi = $luas</h3>";
    }
    ?>
</body>

</html>