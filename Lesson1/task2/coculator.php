<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy Tính Giá Trị Tương Lai</title>
</head>

<body>
    <h1>Máy Tính Giá Trị Tương Lai</h1>
    <form method="post">
        <label for="soTienDauTu">Số Tiền Đầu Tư Ban Đầu:</label>
        <input type="number" name="soTienDauTu" required><br><br>

        <label for="laiSuat">Lãi Suất Năm (%):</label>
        <input type="number" step="0.01" name="laiSuat" required><br><br>

        <label for="soNam">Số Năm Đầu Tư:</label>
        <input type="number" name="soNam" required><br><br>

        <input type="submit" name="tinhToan" value="Tính Toán">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tinhToan'])) {
        $soTienDauTu = $_POST['soTienDauTu'];
        $laiSuat = $_POST['laiSuat'] / 100;
        $soNam = $_POST['soNam'];

        $giaTriTuongLai = $soTienDauTu;
        for ($i = 0; $i < $soNam; $i++) {
            $giaTriTuongLai += $giaTriTuongLai * $laiSuat;
        }

        echo "<h2>Giá Trị Tương Lai Sau $soNam Năm:</h2>";
        echo "<p>" . number_format($giaTriTuongLai, 2) . " VND</p>";
    }
    ?>
</body>

</html>