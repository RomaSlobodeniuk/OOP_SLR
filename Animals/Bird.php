<?php

namespace Animals;
use Animals\Animal;

class Bird extends Animal
{
    public $name = 'Bird';
    public $voice = '"tweet"';

    public function __construct()
    {
    }
}