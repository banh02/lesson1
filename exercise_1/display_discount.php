<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kết quả Tính Chiết Khấu</title>
</head>
<style>

</style>

<body>
    <h2>Kết quả Tính Chiết Khấu</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Kiểm tra nếu yêu cầu là POST
        $description = $_POST['description']; // Lấy mô tả sản phẩm
        $listPrice = $_POST['price']; // Lấy giá niêm yết của sản phẩm
        $discountPercent = $_POST['discount']; // Lấy phần trăm chiết khấu
    
        // Tính toán chiết khấu
        $discountAmount = $listPrice * $discountPercent * 0.01; // Số tiền được chiết khấu
        $discountPrice = $listPrice - $discountAmount; // Giá sau khi chiết khấu
    
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Thông tin</th><th>Giá trị</th></tr>";
        echo "<tr><td>Mô tả sản phẩm</td><td>$description</td></tr>";
        echo "<tr><td>Giá niêm yết</td><td>" . number_format($listPrice, 2) . "</td></tr>";
        echo "<tr><td>Phần trăm chiết khấu</td><td>" . number_format($discountPercent, 2) . "%</td></tr>";
        echo "<tr><td>Số tiền chiết khấu</td><td>" . number_format($discountAmount, 2) . "</td></tr>";
        echo "<tr><td>Giá sau chiết khấu</td><td>" . number_format($discountPrice, 2) . "</td></tr>";
        echo "</table>";

    } else {
        echo "<p>Yêu cầu không hợp lệ.</p>";
    }
    ?>
</body>

</html>