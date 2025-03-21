<!DOCTYPE html>
<html>
<head>
    <title>Цифра в слово</title>
</head>
<body>
    <form method="post">
        Введите цифру (0-9): <input type="text" name="digit">
        <input type="submit" value="Преобразовать">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $digit = $_POST['digit'];
        $words = ["Ноль", "Один", "Два", "Три", "Четыре", "Пять", "Шесть", "Семь", "Восемь", "Девять"];
        if ($digit >= 0 && $digit <= 9) {
            echo $words[$digit];
        } else {
            echo "Введите цифру от 0 до 9";
        }
    }
    ?>
</body>
</html>