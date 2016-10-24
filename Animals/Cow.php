<?php

namespace Animals;
use Animals\Animal;

class Cow extends Animal
{
    public $name = 'Cow';
    public $voice = '"moo"';

    public function __construct()
    {
    }
}