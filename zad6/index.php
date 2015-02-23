<?php
# Ваши задание будет создание создание сокращенного варианта ФИО, т. е.
# вводим: Иванов Иван Петрович и нам выводит: Иванов И. П.
function str_line($a) {
    $lineName = mb_strlen($a);
    $lineName1 = mb_strlen($a) -1;
    $lineName = $lineName - $lineName1;
    return $lineName;
}
$firstName = $_POST['firstName'];
$Name = $_POST['Name'];
$lastName = $_POST['lastName'];

$lineName = str_line($Name);
$line_lastName = str_line($lastName);

echo $firstName . " " . mb_substr($Name, 0, $lineName) . ". " . mb_substr($lastName, 0, $line_lastName) . ".";

