<?php
$password = $_GET["password"];
$len = strlen($password);
echo "password: " . $password . "<br/>strength: ";

$strength = 4 * $len;

$digits = 0;
$uppers = 0;
$lowers = 0;
$letters = array();
foreach (str_split($password) as $c) {
    $letters[$c]++;
    if (is_numeric($c)) {
        $digits++;
    } else if (ctype_upper($c)){
        $uppers++;
    } else {
        $lowers++;
    }
}

$strength += $digits * 4;
$strength += $uppers > 0 ? ($len - $uppers) * 2 : 0;
$strength += $lowers > 0 ? ($len - $lowers) * 2 : 0;
$strength -= $digits == 0 ? $len : 0;
$strength -= $digits == $len ? $len : 0;
foreach (array_keys($letters) as $let) {
    $strength -= $letters[$let] - 1;
}
echo $strength;
?>