<?php
declare(strict_types=1);

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Filter;

class FilterTest extends TestCase
{
    public function testValidEmail($expected, $input)
    {
        $this->assertEquals($expected, $input);
    }
    public function EqualData(): array
    {
        return [
            [
                'foo@bar.com',
                'foo@bar.it',
            ],
            [
                'foo@gmail.com',
                "foo",
            ],
        ];
    }
}
