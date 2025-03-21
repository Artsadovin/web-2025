<!DOCTYPE html>
<html>
<head>
    <title>Знак зодиака</title>
</head>
<body>
    <form method="post">
        Введите дату (ДД.ММ.ГГГГ): <input type="text" name="date">
        <input type="submit" value="Определить знак зодиака">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST['date'];
        list($day, $month, $year) = explode('.', $date);

        if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
            echo "Водолей";
        } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            echo "Рыбы";
        } elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
            echo "Овен";
        } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
            echo "Телец";
        } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
            echo "Близнецы";
        } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
            echo "Рак";
        } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
            echo "Лев";
        } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            echo "Дева";
        } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
            echo "Весы";
        } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
            echo "Скорпион";
        } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
            echo "Стрелец";
        } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
            echo "Козерог";
        }
    }
    ?>
</body>
</html>