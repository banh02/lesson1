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
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $description = $_POST['description'];
        $listPrice = $_POST['price']; 
        $discountPercent = $_POST['discount']; 
    
        // Tính toán chiết khấu
        $discountAmount = $listPrice * $discountPercent * 0.01; 
        $discountPrice = $listPrice - $discountAmount; 
    
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
