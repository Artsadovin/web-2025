<?php
declare(strict_types=1);

$text = $_GET['text'];
if (empty($text)) {
    exit('Empty input!');
}

# Необходимо написать функцию удаления лишних символов из строки
function removeExtraSymbols(string $text): string
{
    $modified = "*";
    $prev = "*";
    for ($i = 1; $i < strlen($text); $i++) {
        if ($text[$i] <> $prev) {
            $modified = $modified . $text[$i];
        }
        $prev = $text[$i];
    }
    return $modified;
}

$stringWithoutExtraSymbols = removeExtraSymbols($text);
echo('String without extra symbols: ' . $stringWithoutExtraSymbols);
?>