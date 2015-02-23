<?php 
# Разработайте программу, которая определяла количество прошедших часов по введенным пользователем
# градусах. Введенное число может быть от 0 до 360

$a = $_GET['a'];
$a = (string) round(($a * 12/360), 2);
$hour = str_split($a);
$max = count($hour);
var_dump($hour);
$i = 0;
$min = 0;
while($i <= $max-1)
{
     if($i == ($max - 2) || $i == ($max - 1))
     {
          echo $i;
          if($hour[$i] == 0)
          {
               $hour[$i] = '0';
          }
          $min =$min . $hour[$i];
     }
     $i++;
}
$min = round($min * 0.6);
echo $hour[0] . $hour[1] . " ч " . $min . "мин";


