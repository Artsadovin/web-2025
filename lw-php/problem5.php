<!DOCTYPE html>
<html>
<head>
    <title>Факториал числа</title>
</head>
<body>
    <form method="post">
        Введите число: <input type="text" name="number">
        <input type="submit" value="Вычислить факториал">
    </form>

    <?php
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        echo "Факториал числа $number: " . factorial($number);
    }
    ?>
</body>
</html>