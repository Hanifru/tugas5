<!DOCTYPE html>
<html>

<head>
    <title>Hitung Volume Limas Segiempat</title>
</head>

<body>
    <h2>Hitung Volume Limas Segiempat</h2>
    <form method="post">
        <label>Panjang sisi alas (s):</label><br>
        <input type="number" name="s" step="any" required><br><br>

        <label>Tinggi limas (t):</label><br>
        <input type="number" name="t" step="any" required><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s = $_POST['s'];
        $t = $_POST['t'];

        // rumus volume limas segiempat = 1/3 × (s × s) × t
        $volume = (1 / 3) * ($s * $s) * $t;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Volume Limas Segiempat = " . round($volume, 2);
    }
    ?>
</body>

</html>