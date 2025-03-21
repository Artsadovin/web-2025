<!DOCTYPE html>
<html>
<head>
    <title>Обратная польская запись</title>
</head>
<body>
    <form method="post">
        Введите выражение: <input type="text" name="expression">
        <input type="submit" value="Вычислить">
    </form>

    <?php
    function evaluateRPN($expression) {
        $stack = [];
        $tokens = explode(' ', $expression);

        foreach ($tokens as $token) {
            if (is_numeric($token)) {
                array_push($stack, $token);
            } else {
                $b = array_pop($stack);
                $a = array_pop($stack);
                switch ($token) {
                    case '+': array_push($stack, $a + $b); break;
                    case '-': array_push($stack, $a - $b); break;
                    case '*': array_push($stack, $a * $b); break;
                }
            }
        }

        return array_pop($stack);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $expression = $_POST['expression'];
        echo "Результат: " . evaluateRPN($expression);
    }
    ?>
</body>
</html>