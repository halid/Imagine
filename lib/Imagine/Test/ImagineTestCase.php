<?php

namespace Imagine\Test;

use Imagine\ImageInterface;
use Imagine\Test\Constraint\IsImageEqual;

class ImagineTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Asserts that two images are equal using color histogram comparison method
     *
     * @param Imagine\ImageInterface $expected
     * @param Imagine\ImageInterface $actual
     * @param string                 $message
     * @param float                  $delta
     * @param integer                $buckets
     */
    public static function assertImageEquals($expected, $actual, $message = '', $delta = 0.05, $buckets = 4)
    {
        $constraint = new IsImageEqual($expected, $delta, $buckets);

        self::assertThat($actual, $constraint, $message);
    }
}
