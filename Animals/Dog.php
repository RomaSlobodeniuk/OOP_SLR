<?php

namespace Animals;
use Animals\Animal;

class Dog extends Animal
{
    public $name = 'Dog';
    public $voice = '"woof"';

    public function __construct()
    {
    }

}