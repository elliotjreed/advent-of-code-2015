<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\AdventOfCode\DayFive;

use PHPUnit\Framework\TestCase;
use ElliotJReed\AdventOfCode\DayFive\PartTwo;

class PartTwoTest extends TestCase
{
    public function testItFindsNumberOfNiceWords(): void
    {
        $this->assertSame(1, (new PartTwo())->solve('xyxy'));
        $this->assertSame(1, (new PartTwo())->solve('qjhvhtzxzqqjkmpb'));
        $this->assertSame(1, (new PartTwo())->solve('xxyxx'));
        $this->assertSame(0, (new PartTwo())->solve('uurcxstgmygtbstg'));
        $this->assertSame(0, (new PartTwo())->solve('ieodomkazucvgmuy'));
    }
}
