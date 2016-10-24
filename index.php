<?php

spl_autoload_register(function ($class) {
    $file_name = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file_name)) {
        require_once($file_name);
    } else {
        echo "file is not exist";
    }
});
echo '<hr><br>';
$first = new Classes\First_class\First_class();
echo "I'm ". $first->getClassName();
echo '<br><br><hr>';

echo '<hr><br>';
$second = new Classes\Second_class\Second_class();
echo "I'm ". $second->getClassName();
echo '<br><br><hr>';

echo '<hr><br>';
$third = new Classes\Third_class\Third_class();
echo "I'm ". $third->getClassName();
echo '<br><br><hr>';

//echo '<hr><br>';
//$animal = new Animals\Animal();
//echo $animal->getVoice();
//echo '<br><br><hr>';
//
//echo '<hr><br>';
//$bird = new Animals\Bird();
//echo $bird->getVoice();
//echo '<br><br><hr>';
//
//echo '<hr><br>';
//$cat = new Animals\Cat();
//echo $cat->getVoice();
//echo '<br><br><hr>';
//
//echo '<hr><br>';
//$cow = new Animals\Cow();
//echo $cow->getVoice();
//echo '<br><br><hr>';
//
//echo '<hr><br>';
//$dog = new Animals\Dog();
//echo $dog->getVoice();
//echo '<br><br><hr>';
//
//echo '<hr><br>';
//$fox = new Animals\Fox();
//echo $fox->getVoice();
//echo '<br><br><hr>';


//$decimal = new Maths\Decimals();
//$decimal->addition();
//echo $decimal->showResults();
//$decimal->calculation();
//echo $decimal->showResults();
//$decimal->multiplication();
//echo $decimal->showResults();
//$decimal->division();
//echo $decimal->showResults();
//
//$binary = new Maths\Binaries();
//$binary->addition();
//echo $binary->showResults();
//$binary->calculation();
//echo $binary->showResults();
//$binary->multiplication();
//echo $binary->showResults();
//$binary->division();
//echo $binary->showResults();
