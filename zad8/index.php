<?php
function __autoload($class) {
    require __DIR__  . '\\' . $class . '.php';

}

$b = $_POST['b'];
$i = fmod($b , 5);

if ($i == 0 || $i == 4 )
{
    $view = new View;
    $view->items = $a = 'Красный';
    include('SvetoforRed.html');

}
else
{
    $view = new View;
    $view->items = $a = 'Зелёный';
    include('SvetoforGreen.html');

}





