<?php

spl_autoload_register(function ($class) {
    $file_name = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file is not exist";
    }
});

$decimal = new Maths\Decimals();
$decimal->addition();
echo $decimal->showResults();
$decimal->calculation();
echo $decimal->showResults();
$decimal->multiplication();
echo $decimal->showResults();
$decimal->division();
echo $decimal->showResults();

$binary = new Maths\Binaries();
$binary->addition();
echo $binary->showResults();
$binary->calculation();
echo $binary->showResults();
$binary->multiplication();
echo $binary->showResults();
$binary->division();
echo $binary->showResults();
