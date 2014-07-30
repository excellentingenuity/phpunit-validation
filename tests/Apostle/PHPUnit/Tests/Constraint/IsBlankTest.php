<?php
namespace Apostle\PHPUnit\Tests\Constraint;

use Apostle\PHPUnit\Constraint\IsBlank;

class IsBlankTest extends \PHPUnit_Framework_TestCase
{
    public function testConstraint()
    {
        $constraint = new IsBlank();

        $this->assertTrue($constraint->matches(''));
        $this->assertTrue($constraint->matches(null));
        $this->assertFalse($constraint->matches('foo'));
    }
}
