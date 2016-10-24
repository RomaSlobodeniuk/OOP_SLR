<?php

namespace Animals;
use Animals\Animal;


class Cat extends Animal
{
    public $name = 'Cat';
    public $voice = '"meow"';

    public function __construct()
    {
    }
}