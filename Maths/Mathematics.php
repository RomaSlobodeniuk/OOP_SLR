<?php

namespace Maths;

class Mathematics
{
    public $a = 64;
    public $b = 8;
    public $c = 2;
    public $result;

    public function __construct()
    {
    }

    public function addition()
    {
        $this->result = 'The addition result is: '. ($this->a + $this->b + $this->c);
    }

    public function calculation()
    {
        $this->result = 'The calculation result is: '. ($this->a - $this->b - $this->c);
    }

    public function multiplication()
    {
        $this->result = 'The multiplication result is: '. ($this->a * $this->b * $this->c);
    }

    public function division()
    {
        $this->result = 'The division result is: '. ($this->a / $this->b / $this->c);
    }

    public function showResults()
    {
        return '<br>'. $this->result . '<br>';
    }

}
