<?php


namespace App\ToTest\Events;


class NumberSquare
{
    public function handle(NumberWrite $numberWrite)
    {
        return pow($numberWrite->number, 2);
    }
}
