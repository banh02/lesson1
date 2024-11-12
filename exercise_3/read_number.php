<?php
function numberToWords($n)
{
    if ($n < 0 || $n >= 1000) {
        return "out of ability";
    }

    $ones = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
    $teens = ["ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
    $tens = ["", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];

    if ($n < 10) {
        return $ones[$n];
    }

    if ($n < 20) {
        return $teens[$n - 10];
    }

    if ($n < 100) {
        $ten = intdiv($n, 10);
        $one = $n % 10;
        return $tens[$ten] . ($one == 0 ? "" : " " . $ones[$one]);
    }

    $hundred = intdiv($n, 100);
    $remainder = $n % 100;
    if ($remainder == 0) {
        return $ones[$hundred] . " hundred";
    } else {
        return $ones[$hundred] . " hundred and " . numberToWords($remainder);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["number"]);
    $result = numberToWords($number);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Number to Words</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 0;
        font-family: Arial, sans-serif;
        border: 2px solid;
        width: 500px;
        height: 300px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    form {
        text-align: center;
        display: flex;
        flex-direction: column;
        width: 50%;
        gap: 20px;
    }

    h2 {
        margin-bottom: 20px;
    }

    input {
        height: 30px;
    }
</style>



<body>
    <h2>Number to Words Converter</h2>
    <form method="post">
        <label for="number">Enter a number (0-999):</label>
        <input type="number" id="number" name="number" min="0" max="999" required
            value="<?php echo isset($number) ? htmlspecialchars($number) : ''; ?>">
        <input type="submit" value="Convert">
        <input type="text" id="result" name="result" readonly
            value="<?php echo isset($result) ? htmlspecialchars($result) : ''; ?>">
    </form>
</body>

</html>