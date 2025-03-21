<!DOCTYPE html>
<html>
<head>
    <title>Счастливые билеты</title>
</head>
<body>
    <form method="post">
        Начальный номер: <input type="text" name="start">
        Конечный номер: <input type="text" name="end">
        <input type="submit" value="Найти счастливые билеты">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = $_POST['start'];
        $end = $_POST['end'];

        for ($i = $start; $i <= $end; $i++) {
            $ticket = str_pad($i, 6, '0', STR_PAD_LEFT);
            $sum1 = $ticket[0] + $ticket[1] + $ticket[2];
            $sum2 = $ticket[3] + $ticket[4] + $ticket[5];
            if ($sum1 == $sum2) {
                echo $ticket . "<br>";
            }
        }
    }
    ?>
</body>
</html>