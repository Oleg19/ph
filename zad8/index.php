<?php
function __autoload($class) {
    require __DIR__  . '\\' . $class . '.html';
    //require __DIR__  . '/view/' .  $class . '.php';
}

$b = $_POST['b'];
$i = fmod($b , 5);
echo $i;
if ($i == 0 || $i <= 3)
    {
        $a = new Svetofor('Зелёный');
        //var_dump($a);
        return $a;
    }
else
    {
        $a = new Svetofor('Красный');
        return $a;
    }