<?php

namespace Maths;
use Maths\Mathematics;

class Binaries extends Mathematics
{
    public function __construct()
    {
        echo "<br><hr>In binary: <br>";
    }

    public function addition()
    {
        $this->result = 'The addition result is: '. decbin($this->a + $this->b + $this->c) . '<br>';
    }

    public function calculation()
    {
        $this->result = 'The calculation result is: '. decbin($this->a - $this->b - $this->c) . '<br>';
    }

    public function multiplication()
    {
        $this->result = 'The multiplication result is: '. decbin($this->a * $this->b * $this->c) . '<br>';
    }

    public function division()
    {
        $this->result = 'The division result is: '. decbin($this->a / $this->b / $this->c) . '<br>';
    }

    public function showResults()
    {
        return  /*'<br>'. decbin*//*(*/$this->result/*) . '<br>'*/;
    }
}