<?php

namespace Animals;

class Animal
{
    public $name = 'Animal';
    public $voice = '"I\'m animal"';

    public function getVoice()
    {
        return $this->getName() . ' goes ' . $this->voice;
    }

    public function getName()
    {
        return $this->name;
    }
}