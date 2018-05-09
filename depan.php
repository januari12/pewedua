<?php 

spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

use src\View;

$V = new View();
$V->render();
echo "<br>";
$x = new \app\View();
$x->render();

?>
