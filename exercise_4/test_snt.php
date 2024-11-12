<?php
// Hàm kiểm tra số nguyên tố
function isPrime($n)
{
    if ($n <= 1)
        return false;

    $i = 2;
    while ($i <= sqrt($n)) {
        if ($n % $i == 0)
            return false;
        $i++;
    }
    return true;
}

$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["number"]);
    if (isPrime($number)) {
        $result = $number . " là số nguyên tố.";
    } else {
        $result = $number . " không phải là số nguyên tố.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kiểm tra số nguyên tố</title>
    <style>
        /* Căn giữa trang */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        /* Căn giữa form và chỉnh sửa form */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <form method="post">
        <h2>Kiểm tra số nguyên tố</h2>
        <label for="number">Nhập số cần kiểm tra:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Kiểm tra">
        <?php if (!empty($result)): ?>
            <p>Kết quả: <?php echo $result; ?></p>
        <?php endif; ?>
    </form>
</body>

</html>