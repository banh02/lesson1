<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Máy Tính Chiết Khấu Sản Phẩm</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* text-align: end; */
        color: #fff;
        background: #fff;
    }

    body {
        background: #333;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 300px;
    }

    button {
        border-radius: 60px;
        padding: 10px 10px;
        background-color: blueviolet;
        cursor: pointer;
    }
</style>

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