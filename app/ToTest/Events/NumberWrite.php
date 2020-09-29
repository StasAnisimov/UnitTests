<?php


namespace App\ToTest\Events;


class NumberWrite
{
    /**
     * @var int
     */
    public $number;

    /**
     * NumberWrite constructor.
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }
}
