<?php

namespace Tests\Unit;

use App\ToTest\Events\NumberWrite;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class NumberWriteTest extends TestCase
{
    public function numbers()
    {
        return [
            [2,4],
            [3,9],
            [4,16],
            [5,25],
            [6,36]
        ];
    }

    /**
     * @dataProvider numbers
     */
    public function testNumberWrite($number,$square) {
        $result = Event::dispatch(new NumberWrite($number));
        $this->assertEquals($result[0],$square);
    }
}
