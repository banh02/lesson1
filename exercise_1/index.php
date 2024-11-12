<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Máy Tính Chiết Khấu Sản Phẩm</title>
</head>


<body>
    <h2>Máy Tính Chiết Khấu Sản Phẩm</h2>
    <form action="display_discount.php" method="post">
        <label for="description">Mô Tả Sản Phẩm:</label>
        <input type="text" id="description" name="description" required><br><br>

        <label for="price">Giá Niêm Yết:</label>
        <input type="number" id="price" name="price" required step="0.01"><br><br>

        <label for="discount">Phần Trăm Chiết Khấu:</label>
        <input type="number" id="discount" name="discount" required step="0.01"><br><br>

        <button type="submit">Tính Chiết Khấu</button>
    </form>
</body>

</html>
